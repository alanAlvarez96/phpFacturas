document.addEventListener('DOMContentLoaded', function() {
    var select = document.querySelectorAll('select');
    M.FormSelect.init(select);
});
async function sendData(form) {
    let result,data;
    let cfdi=document.getElementById('cfdi');
    let cfdiID=cfdi.value;
    data=new FormData(form);
    data.append('cfdi',cfdiID);
    result=await $.ajax({
        url:"",
        type:"POST",
        data:data,
        processData: false,
        contentType:false
    });
}