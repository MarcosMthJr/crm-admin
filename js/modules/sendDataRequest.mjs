//const btnFechar =  document.querySelector(".modal__close");
export default function sendDataRequest(configRequest, sendMessage = "Enviando dados...", login = false) {

    configRequest.form.onsubmit = event => {
        event.preventDefault();
        let timerInterval;
        Swal.fire({
            title: sendMessage,
            showConfirmButton: false,
            onBeforeOpen: () => {
                Swal.showLoading()
                timerInterval = setInterval(() => {
                    const content = Swal.getContent()
                    if (content) {
                        const b = content.querySelector('b')
                        if (b) {
                            b.textContent = Swal.getTimerLeft()
                        }
                    }
                })
            },
            onClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            if (result.dismiss === Swal.DismissReason.timer) {

            }
        })
        makeRequest(event, configRequest, login);

    }
}


//realizando post
async function makeRequest(event, configRequest, login) {
    console.log("chegou na  makeRequest");
    const form = event.target;
    const data = new FormData(form);

    const options = {
        method: configRequest.method,
        body: new URLSearchParams(data)
    }
    const urlRequest = configRequest.requestUrl;
    let request = await fetch(urlRequest, options);

    checkResponse(request, login);


}

async function checkResponse(requestResponse, login) {
    const response = await requestResponse;
    const responseJson = await response.json();
    if ((response.status >= 200) && (response.status <= 299)) {
        if (login) {

            console.log("chegou no login");
            const redirect = `${window.location.href}/index.php`;
            window.location.href = redirect;
            return;
        }
        Swal.fire({
            title: `${responseJson.title}`,
            html: `${responseJson.message}`,
            icon: 'success',
            showCancelButton: false,
            allowOutsideClick: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ok'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = `${responseJson.redirect}`;
            }
        })
    }
    else if ((response.status >= 400) && (response.status <= 499)) {
        Swal.fire({
            title: `${responseJson.title}`,
            html: `${responseJson.message}`,
            icon: 'warning',
            allowOutsideClick: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ok'
        })

    } else if ((response.status >= 500)) {
        Swal.fire({
            title: `${responseJson.title}`,
            html: `${responseJson.message}`,
            icon: 'warning',
            allowOutsideClick: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ok'
        })
    }
}