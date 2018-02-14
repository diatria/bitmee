function axylum(argument, test) {
  var elementParent = $(argument).html();
  var elementReplace = String(elementParent).replace('{{test}}', test);
  return elementReplace;
}