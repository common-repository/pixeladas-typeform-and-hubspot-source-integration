const initForm = (hubspotCookieValue) => {
    const yourFormId = datos_js.id // replace with your FormId
    window.tf.createWidget(yourFormId, {
        container: document.querySelector('#form'),
        hidden: {
            hubspot_utk: hubspotCookieValue,
            hubspot_page_name: document.title,
            hubspot_page_url: window.location.href,
        }
    })
}

const getCookieValue = (name) => (
    document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)')?.pop() || null
)
const intervalId = setInterval(() => {
    const hubspotCookieValue = getCookieValue("hubspotutk")
    if (hubspotCookieValue !== null) {
        initForm(hubspotCookieValue);
        clearInterval(intervalId);
    } else {
        initForm();
        clearInterval(intervalId);
    }
}, 1000);