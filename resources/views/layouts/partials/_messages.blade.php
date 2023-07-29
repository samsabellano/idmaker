{% if messages %}
{% for message in messages %}
<div class="alert {% if message.tags %}alert-{{ message.tags }}{% endif %}  alert-dismissible fade show toast__message__container slideIn animate px-3 py-3 float-end d-flex justify-content-between"
    role="alert">
    <div class="d-flex align-items-center gap-2 toast__message__content">
        {% if message.tags == 'success' %}
        <i class="fa-solid fa-circle-check"></i>
        {% elif message.tags == 'info'%}
        <i class="fa-solid fa-circle-info"></i>
        {% elif message.tags == 'warning' %}
        <i class="fa-solid fa-triangle-exclamation"></i>
        {% elif message.tags == 'error' %}
        <i class="fa-solid fa-circle-exclamation"></i>
        {% endif %}
        <small class="toast__message">{{ message }}</small>
    </div>
    <div class="mx-2"></div>
    <button type="button" class="btn btn-sm d-flex align-items-center justify-content-center btn__close__toast__message"
        data-bs-dismiss="alert" aria-label="Close">&times</button>
</div>
{% endfor %}
{% endif %}