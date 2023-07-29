import flatpickr from "flatpickr";

flatpickr("input[type=datetime-local]", {
    altInput: true,
    altFormat: "F j, Y",
    dateFormat: "m-d-Y",
});
