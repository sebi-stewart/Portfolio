
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

  exclHeadFoot.style.cssText = heightSeparators;
}

function setIndent(includeLineNum = false){

  let indentElements = document.getElementsByClassName("main");

  for(let indentElement of indentElements){
    setIndentItem(indentElement, includeLineNum);
  }
}

function setIndentItem(body, includeLineNum = false){
  /*Get all our elements from our main section (ID) and the number each one of then
  * then in the before tag we add said number/line number */

  let formBody = document.createElement("div");
  formBody.id = body.id;
  formBody.className = body.className;



  let line = 1;
  let formElement, newChild, lineNum, indent, i, indentParent;
  indent = 0;

  for (let child of body.children){
    formElement = document.createElement("div");
    formElement.className = "text";

    lineNum = document.createElement("div");
    lineNum.className = "line-num";
    if (includeLineNum){
      lineNum.innerHTML = `${line}.`;
    }

    newChild = child.cloneNode(true);

    if (newChild.innerHTML.trim() === ""){
      newChild.innerHTML = "&nbsp;";
    }


    for(let indentClass of child.classList){
      if (indentClass.startsWith("indent")){
        indent += parseInt(indentClass.substring(6).trim());
        newChild.classList.remove(indentClass);
        break;
      }
    }


    for (i = 0; i < indent; i++) {
      indentParent = document.createElement("div");
      indentParent.className = "indented";

      indentParent.appendChild(newChild.cloneNode(true))
      newChild = indentParent;
    }
    newChild.classList.add("line-entry");

    formElement.appendChild(lineNum);
    formElement.appendChild(newChild);

    formBody.appendChild(formElement);

    line++;

  }

  body.replaceWith(formBody);
}

function runFormatting(includeLineNum = false){
  heightFormatting();
  setIndent(includeLineNum);
}
