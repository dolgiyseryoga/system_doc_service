//Функция показа уведомления
function showNotification(message) {
    var notification = document.createElement('div');
    notification.innerHTML = message;
    notification.style.position = 'fixed';
    notification.style.bottom = '50px';
    notification.style.right = '50px';
    notification.style.padding = '20px';
    notification.style.backgroundColor = '#fff';
    notification.style.border = '3px solid #000';
    
    document.body.appendChild(notification);
    
    setTimeout(function() {
      notification.remove();
    }, 3000);
  }


