    const form = document.querySelector('#formid');
    const NameInput = document.querySelector('#NameF');
    const EmailInput = document.querySelector('#EmailF');
    const MessageInput = document.querySelector('#MessageF');

//функция отправки формы обратной связи
function submitForm(event) {
    event.preventDefault();
    if (NameInput.value === '') {
        showNotification('Введите имя!');
    } else if (!isValidName(NameInput.value)) {
        showNotification('Введите корректное имя!');
    } else if (MessageInput.value === '') {
        showNotification('Введите сообщение!');
    } else if (EmailInput.value === '') {
        showNotification('Введите адрес почты!');
    } else if (!isValidEmail(EmailInput.value)) {
        showNotification('Введите корректный адрес почты!');
    } else {
        PuchFeedback();
    }
}

function PuchFeedback() {
            var formData = $('#formid').serialize();
            $.ajax({
              type: 'POST',
              url: '/mail/feedback.php',
              data: formData,
              success: function(response) {
                console.log(response);
                showNotification('Успешно отправлено!');
                $('#formid')[0].reset();
              },
              error: function(xhr, status, error) {
                console.log(status + ': ' + error);
              }
            });
        } 

//функции валидации
function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}
function isValidName(name) {
    return /^([а-яА-Яa-zA-Z]+)$/u.test(name);
}
function isValidPhone(phone) {
    return /^\+375\s?\(?(17|25|29|33|44)\)?\s?\d{3}\-?\d{2}\-?\d{2}$/.test(phone);
}
