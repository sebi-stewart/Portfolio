
function heightFormatting(){
  const head = document.getElementById("nav-bar").children[0];
  const foot = document.getElementById("contact-footer");
  let exclHeadFoot = document.getElementById("excl-head-foot");

  const headHeight = head.clientHeight;
  const footHeight = foot.clientHeight;

  const heightSeparators = `
    margin-top: ${headHeight}px;
    margin-bottom: ${footHeight}px;
  `

  console.log(heightSeparators)

  exclHeadFoot.style.cssText = heightSeparators;
}
