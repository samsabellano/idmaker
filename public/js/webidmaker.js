/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/webidmaker.js ***!
  \************************************/
function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }
function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
function _iterableToArrayLimit(arr, i) { var _i = null == arr ? null : "undefined" != typeof Symbol && arr[Symbol.iterator] || arr["@@iterator"]; if (null != _i) { var _s, _e, _x, _r, _arr = [], _n = !0, _d = !1; try { if (_x = (_i = _i.call(arr)).next, 0 === i) { if (Object(_i) !== _i) return; _n = !1; } else for (; !(_n = (_s = _x.call(_i)).done) && (_arr.push(_s.value), _arr.length !== i); _n = !0); } catch (err) { _d = !0, _e = err; } finally { try { if (!_n && null != _i["return"] && (_r = _i["return"](), Object(_r) !== _r)) return; } finally { if (_d) throw _e; } } return _arr; } }
function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }
// Mirror input field
var first_name = document.getElementById("id-text-input-first-name");
var middle_name = document.getElementById("id-text-input-middle-name");
var last_name = document.getElementById("id-text-input-last-name");
var suffix = document.getElementById("id-text-input-suffix");
var college = document.querySelector("#id-text-input-college");
var course = document.getElementById("id-text-input-course");
var school_id = document.getElementById("id-text-input-school-id");
var start_school_year = document.getElementById("id-text-input-start-school-year");
var end_school_year = document.getElementById("id-text-input-end-school-year");
var guardian_name = document.getElementById("id-text-input-guardian-name");
var guardian_contact_number = document.getElementById("id-text-input-guardian-contact-number");
var guardian_address = document.getElementById("id-text-input-guardian-address");
first_name.addEventListener("input", function () {
  textFormatterForName(this);
  document.getElementById("id-template-first-name").textContent = this.value;
});
middle_name.addEventListener("input", function () {
  textFormatterForName(this);
  shortenedMiddleName();
});
last_name.addEventListener("input", function () {
  textFormatterForName(this);
  document.getElementById("id-template-last-name").textContent = this.value;
});
suffix.addEventListener("input", function () {
  personSuffix();
});
college.addEventListener("input", function () {
  document.getElementById("id-template-college").textContent = this.value;
});
course.addEventListener("input", function () {
  document.getElementById("id-template-course").textContent = this.value;
});
school_id.addEventListener("input", function () {
  document.getElementById("id-template-school-id").textContent = this.value;
});
start_school_year.addEventListener("input", function () {
  idSchoolYear();
  validateSchoolYear();
});
end_school_year.addEventListener("input", function () {
  idSchoolYear();
  validateSchoolYear();
});
var textFormatterForName = function textFormatterForName(textInput) {
  var words = textInput.value.split(" ");
  for (var i = 0; i < words.length; i++) {
    var word = words[i];
    words[i] = word.charAt(0).toUpperCase() + word.slice(1);
  }
  textInput.value = words.join(" ");
};
var shortenedMiddleName = function shortenedMiddleName() {
  var middleNameElement = document.getElementById("id-template-middle-name");
  var middleNameResult = middle_name.value.charAt(0).toUpperCase();
  if (middleNameResult) {
    middleNameElement.textContent = "".concat(middleNameResult, ".");
  } else {
    middleNameElement.textContent = "";
  }
  var words = middle_name.value.split(" ");
  for (var i = 0; i < words.length; i++) {
    var word = words[i];
    words[i] = word.charAt(0).toUpperCase() + word.slice(1);
  }
  middle_name.value = words.join(" ");
};
var personSuffix = function personSuffix() {
  var suffixElement = document.getElementById("id-template-suffix");
  var pSuffix = suffix.value;
  if (pSuffix) {
    suffixElement.textContent = "".concat(pSuffix, ".");
  } else {
    suffixElement.textContent = "";
  }
};
var idSchoolYear = function idSchoolYear() {
  var startYear = start_school_year.value;
  var endYear = end_school_year.value;
  var schoolYearElement = document.getElementById("id-template-school-year");
  schoolYearElement.textContent = "S.Y.";
  if (startYear && endYear) {
    var schoolYearResult = "S.Y. ".concat(startYear, " - ").concat(endYear);
    schoolYearElement.textContent = schoolYearResult;
  } else {
    schoolYearElement.textContent = "S.Y.";
  }
};
var validateSchoolYear = function validateSchoolYear() {
  var invalidSchoolYearElement = document.getElementById("invalid-start-year");
  if (start_school_year && end_school_year) {
    var startYear = parseInt(start_school_year.value);
    var endYear = parseInt(end_school_year.value);
    if (startYear > endYear) {
      invalidSchoolYearElement.textContent = "Start year should be lesser than the end year.";
      invalidSchoolYearElement.style.display = "block";
      start_school_year.classList.add("is-invalid");
    } else if (startYear === endYear) {
      invalidSchoolYearElement.textContent = "Start year should not be equal to end year.";
      invalidSchoolYearElement.style.display = "block";
      start_school_year.classList.add("is-invalid");
    } else {
      invalidSchoolYearElement.textContent = "";
      invalidSchoolYearElement.style.display = "none";
      start_school_year.classList.remove("is-invalid");
    }
  }
};
var signatureModal = document.getElementById("signature-modal");
var btnWriteSignature = document.getElementById("btn-write-signature");
var closeSignatureModal = document.getElementById("close-signature-modal");
var clearSignaturePad = document.getElementById("clear-signature-pad");
var attachSignatureToId = document.getElementById("attach-signature-to-id");
var signatureCanvas = document.getElementById("signature-canvas");
var idTempleSignature = document.getElementById("id-template-signature");
var canvasContext = signatureCanvas.getContext("2d");
var isDrawing = false;
canvasContext.lineWidth = 1;
canvasContext.lineJoin = canvasContext.lineCap = "round";
var handlePointerDown = function handlePointerDown(event) {
  isDrawing = true;
  canvasContext.beginPath();
  var _getCursorPosition = getCursorPosition(event),
    _getCursorPosition2 = _slicedToArray(_getCursorPosition, 2),
    positionX = _getCursorPosition2[0],
    positionY = _getCursorPosition2[1];
  canvasContext.moveTo(positionX, positionY);
};
signatureCanvas.addEventListener("pointerdown", handlePointerDown, {
  passive: true
});
var handlePointerMove = function handlePointerMove(event) {
  if (!isDrawing) return;
  var _getCursorPosition3 = getCursorPosition(event),
    _getCursorPosition4 = _slicedToArray(_getCursorPosition3, 2),
    positionX = _getCursorPosition4[0],
    positionY = _getCursorPosition4[1];
  canvasContext.lineTo(positionX, positionY);
  canvasContext.stroke();
};
signatureCanvas.addEventListener("pointermove", handlePointerMove, {
  passive: true
});
var getCursorPosition = function getCursorPosition(event) {
  var rect = signatureCanvas.getBoundingClientRect();
  var scaleX = signatureCanvas.width / rect.width;
  var scaleY = signatureCanvas.height / rect.height;
  var positionX = (event.clientX - rect.left) * scaleX;
  var positionY = (event.clientY - rect.top) * scaleY;
  return [positionX, positionY];
};
var handlePointerUp = function handlePointerUp() {
  isDrawing = false;
};
signatureCanvas.addEventListener("pointerup", handlePointerUp, {
  passive: true
});
var clearSignPad = function clearSignPad() {
  canvasContext.clearRect(0, 0, signatureCanvas.width, signatureCanvas.height);
};
clearSignaturePad.addEventListener("click", function (event) {
  event.preventDefault();
  clearSignPad();
});
attachSignatureToId.addEventListener("click", function (event) {
  event.preventDefault();
  var signatureURL = signatureCanvas.toDataURL();
  idTempleSignature.src = signatureURL;
});
btnWriteSignature.addEventListener("click", function () {
  signatureModal.style.display = "block";
});
closeSignatureModal.addEventListener("click", function () {
  signatureModal.style.display = "none";
});
var closeModalIdForm = document.getElementById("close-modal-id-form");
closeModalIdForm.addEventListener("click", function (event) {
  event.preventDefault();
  clearSignPad();
});
attachSignatureToId.addEventListener("click", function () {
  var signatureCanvasURL = signatureCanvas.toDataURL();
  var signatureFile = new File([signatureCanvasURL], "signature.png", {
    type: "image/png"
  });
  var fileList = new FileList();
  fileList.add(signatureFile);
  var signatureFileInput = document.getElementById("signature-file");
  signatureFileInput.files = fileList;
  // signatureFileInput.value = "";
});

// Get the modal
var photoModal = document.getElementById("photo-modal");

// Get the button that opens the modal
var btnTakeAPhoto = document.getElementById("btn-take-a-photo");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btnTakeAPhoto.addEventListener("click", function () {
  photoModal.style.display = "block";
});

// When the user clicks on <span> (x), close the modal
span.addEventListener("click", function () {
  photoModal.style.display = "none";
});

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", function (event) {
  if (event.target == photoModal) {
    photoModal.style.display = "none";
  }
  webcam.stop();
});

// Web Cam Modal Functionalities
var idTemplatePicture = document.getElementById("id-template-picture");
var webCamEl = document.getElementById("webCam");
var canvasEl = document.getElementById("canvas");
var btnOnOff = document.getElementById("btn-on-off-camera");
var btnSnap = document.getElementById("btn-take-picture");
var btnDisplaySnappedPic = document.getElementById("btn-display-snapped-picture");
var btnShowTakePhotoModal = document.getElementById("btn-take-a-photo");
var btnClosephotoModal = document.getElementById("close-photo-modal");
var webcam = new Webcam(webCamEl, "user", canvasEl);
var startCamLabel = "Start Camera";
var stopCamLabel = "Stop Camera";
btnOnOff.addEventListener("click", function () {
  if (btnOnOff.textContent === startCamLabel) {
    btnOnOff.textContent = stopCamLabel;
    webcam.start();
  } else {
    btnOnOff.textContent = startCamLabel;
    webcam.stop();
  }
});
btnSnap.addEventListener("click", function () {
  webcam.snap();
  webcam.start();
  btnDisplaySnappedPic.classList.remove("disabled");
});
btnClosephotoModal.addEventListener("click", function () {
  webcam.stop();
});
btnShowTakePhotoModal.addEventListener("click", function () {
  webcam.start();
  btnOnOff.textContent = stopCamLabel;
});
btnDisplaySnappedPic.addEventListener("click", function () {
  closeModalAndOffCam();
  displayPictureToIdTemplate();
});
var closeModalAndOffCam = function closeModalAndOffCam() {
  photoModal.style.display = "none";
  webcam.stop();
};
var idPictureDiv = document.getElementById("student-id-picture");
var displayPictureToIdTemplate = function displayPictureToIdTemplate() {
  var imgURL = canvasEl.toDataURL();
  var ctx = canvasEl.getContext("2d");
  idTemplatePicture.src = imgURL;
  ctx.clearRect(0, 0, canvasEl.width, canvasEl.height);
  btnDisplaySnappedPic.classList.add("disabled");
  idPictureDiv.style.width = "155px";
  idPictureDiv.style.height = "133px";
};

// END Web Cam Modal Functionalities
/******/ })()
;