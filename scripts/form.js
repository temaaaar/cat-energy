document.getElementById('page-form').onsubmit = function (event) {
    event.preventDefault(); // Предотвращаем стандартное поведение формы

    // Получаем значения по id
    var name = document.getElementById('name').value;
    var weight = document.getElementById('weight').value;
    var old = document.getElementById('old').value;
    var weight_loss = document.getElementById('weight-loss').value;
    var weight_gain = document.getElementById('weight-gain').value;
    var advice = document.getElementById('advice').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var comment = document.getElementById('comment').value;
    var sweetener = document.getElementById('sweetener').value;
    var water = document.getElementById('water').value;
    var milk = document.getElementById('milk').value;
    var vitamins = document.getElementById('vitamins').value;

    // Создаем объект FormData для отправки данных
    var formData = new FormData();
    formData.append('controls-name', name);
    formData.append('controls-weight', weight);
    formData.append('controls-old', old);
    formData.append('weight-loss', weight_loss);
    formData.append('weight-gain', weight_gain);
    formData.append('advice', advice);
    formData.append('owner-email', email);
    formData.append('owner-phone', phone);
    formData.append('comment', comment);
    formData.append('sweetener', sweetener);
    formData.append('water', water);
    formData.append('milk', milk);
    formData.append('vitamins', vitamins);

    // Отправляем данные с помощью Fetch API
    fetch('form.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            alert('Ваша заявка успешно отправлена!');
            window.location.href = 'index.html'; // Замените 'index.html' на нужный вам файл
        })
        .catch(error => console.error('Ошибка:', error));
};