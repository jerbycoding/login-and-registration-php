<?php
    include "../includes/header.php"
?>

<div id="modal" class="vw-100 vh-100 position-fixed top-0 start-0  justify-content-center align-items-start" style="background: rgba(0, 0, 0, 0.5); display: none; z-index: 1050;">
    

    <div class="bg-warning p-3 rounded mt-5">
        <p class="m-0">Are you sure you wanna Edit ? </p>
        <div class="mt-3">
            <button id="cancelBtn" class="btn btn-secondary btn-sm">Cancel</button>
            <button id="proceedBtn" class="btn btn-success btn-sm">Proceed</button>
        </div>
    </div>

</div>
<div  class="position-absolute top-50 start-50 translate-middle p-3">
    <h1>INFO</h1>
    <div class="d-flex gap-2">
            <div class="card  ">
        <div class="card-header fs-4">First</div>
        <div class="card-body">
            <p class="card-text">test</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header fs-4">Last</div>
        <div class="card-body">
            <p class="card-text" >s</p>
        </div>
    </div>
    <div class="card  ">
        <div class="card-header fs-4">email</div>
        <div class="card-body">
            <p class="card-text" >s</p>
        </div>
    </div>
       <div class="card">
        <div class="card-header fs-4">username</div>
        <div class="card-body">
            <p class="card-text" >s</p>
        </div>
    </div>
    </div>
</div>
<script>

    let modal = document.getElementById('modal');
    let proceed = document.getElementById('proceedBtn');
    let cancel = document.getElementById('cancelBtn');
    
    let current_target = null;

    document.addEventListener('dblclick', (e)=>{
        if (e.target.classList.contains('card-text')){
            current_target = e.target.innerText;
            modal.style.display = 'flex';
        }
    })
    proceed.onclick() = ()=>{
        
    }
    cancel.onclick = ()=>{
        modal.style.display  = 'none';
        current_target = null;
    }
    


</script>