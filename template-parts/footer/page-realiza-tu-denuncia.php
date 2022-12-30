<script type="text/javascript">var $ = window.jQuery;</script><script src="https://fengyuanchen.github.io/datepicker/js/datepicker.js"></script>
<script>
$(document).ready(function () {
$('[data-toggle="datepicker"]').datepicker({
format: 'mm-dd-yyyy'
});
// Available date placeholders:
// Year: yyyy
// Month: mm
// Day: dd
if (window.innerWidth < 768) {
$('[data-toggle="datepicker"]').attr('readonly', 'readonly')
}
});
</script>
// MultiTabs FORM Code
<script>
Webflow.push(function () {
const $forwardButton = $(".next-button");
const $backButton = $("#link-back");
const $submitButton = $("#Submit");
const $form = $("#email-form");
const tabsClass = "multistep-tabs";
const paneClass = "multistep-tab-pane";
const linkClass = "multistep-tab-link";
// Get array of all fields for text inputs, checkboxes and selects
const fields = $("input, select, textarea").not(
":input[type=button], :input[type=submit], :input[type=reset]"
);
// Populate fields the user has already filled out
let usrStore = JSON.parse(localStorage.getItem("usr"));
let usr = usrStore ? usrStore : {};
printUsr();
// Add saveUsr function to fields
for (let index = 0; index < fields.length; index++) {
const field = fields[index];
$(field).on("blur change", saveUsr);
}
// Add events to navigate form
$forwardButton.on("click", moveForward);
$backButton.on("click", moveBackward);
$submitButton.on("click", submitForm);
function moveForward(el) {
el.preventDefault();
// Get current click target and form place
const $target = $(el.currentTarget);
const currentTab = $target.closest("." + paneClass);
const tabIndex = $target
.closest("." + tabsClass)
.data("current")
.split(" ")[1];
let nextIndex = parseInt(tabIndex) + 1;
// Validate required fields before moving forward
let valid = validateFields(currentTab);
if (valid) {
$target.closest("." + tabsClass).data("current", "Tab " + nextIndex);
$("." + linkClass).removeClass("w--current");
$($("." + linkClass)[nextIndex - 1]).addClass("w--current");
$("." + paneClass).removeClass("w--tab-active");
$($("." + paneClass)[nextIndex - 1]).addClass("w--tab-active");
}
}
function moveBackward(el) {
el.preventDefault();
// Get current click target and form place
const $target = $(el.currentTarget);
const currentTab = $target.closest("." + paneClass);
const tabIndex = $target
.closest("." + tabsClass)
.data("current")
.split(" ")[1];
nextIndex = parseInt(tabIndex) - 1;
$target.closest("." + tabsClass).data("current", "Tab " + nextIndex);
$("." + linkClass).removeClass("w--current");
$($("." + linkClass)[nextIndex - 1]).addClass("w--current");
$("." + paneClass).removeClass("w--tab-active");
$($("." + paneClass)[nextIndex - 1]).addClass("w--tab-active");
}
function validateFields(currentTab) {
// Get required fields
let requiredFields = $(currentTab).find(
"input[required], select[required], textarea[required]"
);
let required = true;
$(".required-field").remove();
// Iterate over required fields
for (let index = 0; index < requiredFields.length; index++) {
const $requiredField = $(requiredFields[index]);
if (!$requiredField.val()) {
$requiredField.after(
'<div class="required-field">The ' +
$requiredField.attr("name").replace(/-/g, " ") +
" field is required.</div>"
);
required = false;
}
}
return required;
}
function saveUsr(el) {
// Get field data and save it to usr
const $el = $(el.currentTarget);
let val = $el.val();
const name = $el.data("name");
const type = $el.attr("type");
const fieldTab = $el.data("ftab") ? parseInt($el.data("ftab")) - 1 : "";
if (val) {
$el.next(".required-field").remove();
}
usr[name] = type === "checkbox" ? $el.prop("checked") : val;
localStorage.setItem("usr", JSON.stringify(usr));
}
function printUsr() {
// Populate fields with usr data
for (let index = 0; index < fields.length; index++) {
const field = fields[index];
const fieldType = fields[index].type;
const fieldName = $(field).data("name");
const fieldTab = parseInt($(field).data("ftab")) - 1;
if (fieldType !== "checkbox") {
$(field).val(usr[fieldName]);
} else {
if (usr[fieldName]) {
$(field).prop("checked", true);
$(field).prev().addClass("w--redirected-checked");
}
}
}
}
function submitForm(e) {
e.preventDefault();
// submit form and reset local stoage
localStorage.removeItem("usr");
$form.submit();
}
});
</script>
// INPUS Denunciante
<script>
const $input1 = $('#telefono-den');
const $input2 = $('#nombre-den');
const $radios = $('input[type=radio][name=affectedPerson]');
$radios.on('change', (e) => {
const value = e.currentTarget.id;
$input1
.toggleClass('input--show', value === 'no-2')
.attr('required', () => value === 'no-2');
$input2
.toggleClass('input--show', value === 'no-2')
.attr('required', () => value === 'no-2');
});
</script>
<!--
You can put your custom CSS attributes
-->
<style>
/* You can apply your own color!
--main-light-color is the light grey,
--main-dark-color is the text
--main-active-color is the highlight
you can just add like red, or blue or any helx you like! */
:root {
--main-light-color: #f3f5fb;
--main-dark-color: #321f59;
--main-active-color: #642eff;
}
.datepicker-dropdown {
border-radius: 8px !important;
border: 0 !important;
-webkit-box-shadow: 0px 48px 88px rgba(23, 9, 54, 0.08);
box-shadow: 0px 48px 88px rgba(23, 9, 54, 0.08);
box-sizing: border-box;
}
.datepicker-panel>ul[data-view="week"]>li {
background-color: var(--main-light-color);
color: var(--main-dark-color);
font-weight: bold;
text-transform: uppercase;
margin: 0;
height: initial;
padding-top: 3px;
margin-bottom: 4px;
}
.datepicker-panel>ul[data-view="week"]>li:hover {
background-color: var(--main-light-color);
color: var(--main-dark-color);
border-radius: 0px;
}
.datepicker-panel>ul[data-view="week"] li:first-child {
border-radius: 20px 0 0 20px;
}
.datepicker-panel>ul[data-view="week"] li:last-child {
border-radius: 0 20px 20px 0;
}
.datepicker-top-left::before,
.datepicker-top-left::after {
display: none;
}
.datepicker-panel>ul>li.picked,
.datepicker-panel>ul>li.highlighted,
.datepicker-panel>ul>li.picked:hover {
color: var(--main-active-color);
background: var(--main-light-color);
border-radius: 8px;
font-style: normal;
font-weight: 500;
font-size: 14px;
}
li[data-view="month current"],
li[data-view="year current"] {
text-align: left;
color: var(--main-dark-color);
font-style: normal;
font-weight: 500;
font-size: 14px;
/* line-height: 24px; */
padding-left: 15px;
border-radius: 10px;
}
.datepicker-panel>ul>li:hover {
background: var(--main-light-color);
border-radius: 10px;
}
li[data-view="month current"],
li[data-view="year current"],
li[data-view="years current"] {
margin-bottom: 4px !important;
}
@media screen and (min-width: 768px) {
.datepicker-dropdown {
width: 364px;
padding: 12px;
}
.datepicker-panel>ul>li {
width: 48px;
height: 48px;
padding-top: 10px;
}
li[data-view="month next"],
li[data-view="year next"],
li[data-view="years next"] {
position: absolute;
right: 18px
}
li[data-view="month prev"],
li[data-view="year prev"],
li[data-view="years prev"] {
position: absolute;
right: 66px
}
ul[data-view="months"] li,
ul[data-view="years"] li {
padding-top: 0px;
width: 57px !important;
}
}
@media screen and (max-width: 768px) {
.datepicker-panel {
transform: scale(0.97);
}
}
</style>