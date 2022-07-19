import sendDataRequest from "../../js/modules/sendDataRequest.mjs";
const loc = window.location.pathname;
const dir = loc.substring(0, loc.lastIndexOf('/'));
const configRequest = {
    form: document.form,
    requestUrl: `${dir}/loginFunction.php`,
    method: "POST"
}
sendDataRequest(configRequest, "Realizando login...", true);
