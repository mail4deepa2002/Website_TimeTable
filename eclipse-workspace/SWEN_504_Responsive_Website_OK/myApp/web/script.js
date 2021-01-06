// <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function addChildJS(){
document.getElementById("id03").submit();

}

function addChild(){
  target=addChild.php;
}

function editActivities(){
// target=editTask.php;
target=editTaskModal.php;
}

function submitActivity()
{
  alert ('ssss');
  // document.getElementById('id02').style.display='none';
}

$('#id02').submit(function(event) {
   $.ajax({
     method: "POST",
     url: "addActivityProcess.php",
     data: $("#id02").serialize()
   })
   .done(function( data ) {
     alert(data['msg']);
   });
}


function loginJS()
{
  //alert ('ssss');
  document.getElementById('id01').style.display='none';
}

function registerJS()
{
  //alert ('ssss');
  document.getElementById('form1').style.display='none';
}

function TTpageParent()
{
  if (true) {

  } else {
document.getElementById('id01').style.display='none';
}

}
function taskUpdateAlert($msg) {
   // echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

function validateData()
{
  console.log('i am in');
  let pass = document.getElementById("pID1");
  let cpass = document.getElementById("pID2");

  console.log(">>" + pass.value);
  console.log(">>" + cpass.value);
  if(pass.value === cpass.value)
  {
    //alert ('matching...');
    document.getElementById("form1").submit();
  }
  else
  {
    alert('passwords mismatch');
  }
}
function submitLogin(){
  document.getElementById("id01").submit();
}
