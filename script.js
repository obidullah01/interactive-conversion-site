function validate() {
    var e = document.getElementById("ddlView");
    var optionSelIndex = e.options[e.selectedIndex].value;
    var optionSelectedText = e.options[e.selectedIndex].text;
    if (optionSelIndex == 0) {
        alert("Please select a Conversion Option");
        return;
    }

    const from = document.querySelector('#ddlView').value
    const givenValue = document.querySelector('#amount').value
    const form = new FormData()
    form.append('conv', from)
    form.append('value', givenValue)

    fetch('/history.php', {
      method: "POST",
      body: form
    })
   
}

function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}