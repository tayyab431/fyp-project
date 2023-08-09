$('.search > input').on('keyup', function() {
  var rex = new RegExp($(this).val(), 'i');
    $('.people .person').hide();
    $('.people .person').filter(function() {
        return rex.test($(this).text());
    }).show();
});

$('.user-list-box .person').on('click', function(event) {
    if ($(this).hasClass('.active')) {
        return false;
    } else {
        $("#m_room").val('');
        $("#m_sender").val('');
        $("#m_reciever").val('');
        var findChat = $(this).attr('data-chat');
        var room = $(this).attr('data');
        var sender = $(this).attr('data-sender');
        var reciever = $(this).attr('data-reciever');
        $("#m_room").val(room);
        $("#m_sender").val(sender);
        $("#m_reciever").val(reciever);
       
        var personName = $(this).find('.user-name').text();
        var personImage = $(this).find('img').attr('src');
        var hideTheNonSelectedContent = $(this).parents('.chat-system').find('.chat-box .chat-not-selected').hide();
        var showChatInnerContent = $(this).parents('.chat-system').find('.chat-box .chat-box-inner').show();

        if (window.innerWidth <= 767) {
          $('.chat-box .current-chat-user-name .name').html(personName.split(' ')[0]);
        } else if (window.innerWidth > 767) {
          $('.chat-box .current-chat-user-name .name').html(personName);
        }
        $('.chat-box .current-chat-user-name img').attr('src', personImage);
        $('.chat').removeClass('active-chat');
        $('.user-list-box .person').removeClass('active');
        $('.chat-box .chat-box-inner').css('height', '100%');
        $('.chat-box .overlay-phone-call').css('display', 'block');
        $('.chat-box .overlay-video-call').css('display', 'block');
        $(this).addClass('active');
        $('.chat[data-chat = '+findChat+']').addClass('active-chat');
    }
    if ($(this).parents('.user-list-box').hasClass('user-list-box-show')) {
      $(this).parents('.user-list-box').removeClass('user-list-box-show');
    }
    $('.chat-meta-user').addClass('chat-active');
    $('.chat-box').css('height', 'calc(100vh - 158px)');
    $('.chat-footer').addClass('chat-active');

  const ps = new PerfectScrollbar('.chat-conversation-box', {
    suppressScrollX : true
  });

  const getScrollContainer = document.querySelector('.chat-conversation-box');
  getScrollContainer.scrollTop = 0;
});

const ps = new PerfectScrollbar('.people', {
  suppressScrollX : true
});

$('.mail-write-box').on('keydown', function(event) {
    if(event.key === 'Enter') {
        var chatInput = $(this);
       
        var chatMessageValue = chatInput.val();
        var sender = $("#m_sender").val();
        var reciever = $("#m_reciever").val();
        var room = $("#m_room").val();
        console.log('Room => '+room);
        console.log('Sender => '+sender);
        console.log('Reciever => '+reciever);
        console.log('Message => '+chatMessageValue);
        sendMessage(sender,reciever,room,chatMessageValue);
        if (chatMessageValue === '') { return; }
      
        var clearChatInput = chatInput.val('');
    }
})

$('.hamburger, .chat-system .chat-box .chat-not-selected p').on('click', function(event) {
  $(this).parents('.chat-system').find('.user-list-box').toggleClass('user-list-box-show')
});

function sendMessage(sender, reciever, room, message) {
  $.ajax({
    url: "includes/functions.php",
    type: "POST",
    data: {
      send_message: 1,
      sender: sender,
      reciever: reciever,
      room: room,
      message: message,
    },
    cache: false,
    success: function (dataResult) {
      
      console.log('data result: '+dataResult); // Log the response to the console
      var response = JSON.parse(dataResult); // Parse the JSON response

      if (response.success) {
        var messageId = response.messageId;
        var messageHtml = `
          <div class="bubble me" data-message-id="${messageId}">
            ${message}
            <svg style="margin:6px; cursor:pointer" onclick="deleteMessage(${messageId})" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
              <polyline points="3 6 5 6 21 6"></polyline>
              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
            </svg>
          </div>`;
        // Append the new message to the chat box

        var appendMessage = $('.mail-write-box').parents('.chat-system').find('.active-chat').append(messageHtml);
        const getScrollContainer = document.querySelector('.chat-conversation-box');
        getScrollContainer.scrollTop = getScrollContainer.scrollHeight;
        $("#last_message").html(message);

      } else {
        // Handle the failure case here, if needed
        console.log("Failed to send message.");
      }
    },
    error: function (xhr, status, error) {
      console.log("AJAX error:", status, error);
      console.log("Response:", xhr.responseText);
    },
  });
}
