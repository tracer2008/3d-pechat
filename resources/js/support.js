class Support {

    openMenu(elem) {
        elem.classList.toggle('active');
        document.querySelector('.mobile_menu_wrap').classList.toggle('show');
    }

    sendRequestMessage() {
        let message_to_telegram;
        let phone = document.querySelector('._request_phone');
        let name = document.querySelector('._request_name');
        let message = document.querySelector('._request_message');

        let check = document.querySelector('._checkbox');

        if (phone.value === '' || name.value === '' || !check.checked) {
            name.classList.remove('error');
            phone.classList.remove('error');
            check.parentNode.querySelector('.check_checkbox').classList.remove('error');

            if (phone.value === '') {
                phone.classList.add('error');
            }
            if (name.value === '') {
                name.classList.add('error');
            }
            if (!check.checked) {
                check.parentNode.querySelector('.check_checkbox').classList.add('error');
            }

        } else {
            name.classList.remove('error');
            phone.classList.remove('error');
            check.parentNode.querySelector('.check_checkbox').classList.remove('error');

            message_to_telegram = "<b>Заявка с сайта</b>" + "\n" +
                "<b>Имя:</b> " + name.value + "\n" +
                "<b>Телефон:</b> " + phone.value + "\n" +
                "<b>Сообщение:</b> " + message.value + "\n" +
                "<b>" + new Date().toLocaleString() + "</b>";

            let formData = new FormData();
            formData.append('message', message_to_telegram);

            axios.post('/telegram', formData)
                .then(response => {

                    if (response.data.success) {
                        phone.value = '';
                        name.value = '';
                        message.value = '';

                        document.getElementById('modal_request').classList.add('show');
                    }

                })
                .catch(errors => {
                    console.log(errors);
                });

        }
    }

}

export default Support;
