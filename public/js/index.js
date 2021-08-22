const password=document.getElementById("pass")
const Confirm_password=document.getElementById("con_pass")
const p = document.getElementById("pass_checker");
const pt = document.getElementById("pass_type");
const mail_error = document.getElementById("mail_type");
const mail_checking= document.getElementById("email");

mail_checking.addEventListener("keyup", function () {
    if (
        !mail_checking.value.includes("diu.edu") &&
        mail_checking.value !="") {
        mail_error.innerText =
            "Use e-mail address of DIU.";
        mail_error.style.color = "red";
        // mail_checking.value = "";
    } else {
        mail_error.innerText = "";
        mail_error.style.color = "";
    }
});

password.addEventListener("keyup", function () {
    if (password.value.length>=6) {
        pt.innerText = "Strong";
        pt.style.color = "green";   
    } else {
        pt.innerText=""
    }
});

Confirm_password.addEventListener('keyup',function () {
    if (password.value == Confirm_password.value) {
        if (Confirm_password.value != "") {    
            p.innerText = "Password Matched";
            p.style.color = "green";
        }
    } else {
        if (Confirm_password.value != "") {
            p.innerText = "Password did not Matched";
            p.style.color = "red";
        }
    }
})


function join(btn, name, code, section, banner) {
    console.log(btn);
    const joinbtn = document.getElementById(btn);
    joinbtn.innerText = "Joined";
    joinbtn.className = "btn btn-light m-auto disabled";
    // const mycoursepage = document.getElementById("mycourse");
    // mycoursepage.innerHTML=`
    //     <div class="col">
    //           <div class="card p-2 mx-auto" style="width: 15rem">
    //             <a
    //               href="/details/{{$course->id}}"
    //               class="text-decoration-none text-dark"
    //             >
    //               <img
    //                 src="${banner}"
    //                 class="card-img-top card_img"
    //                 alt="..."
    //               />
    //             </a>
    //             <div class="card-body d-flex justify-content-between">
    //               <div class="mt-3">
    //                 <a
    //                   href="/details/{{$course->id}}"
    //                   class="text-decoration-none text-dark"
    //                 >
    //                   <h6 class="card-title mt-2 mb-3 mt-2 mb-3">
    //                     ${name}
    //                   </h6>
    //                   <p>${code} (${section})</p>
    //                 </a>
    //                 <a class="btn btn-primary m-auto disabled">Joined</a>
    //               </div>
    //               <img
    //                 src="/images/Instructors/Gazi-Islam-3.jpg"
    //                 class="w-25 rounded-circle border border-2 instructor"
    //                 alt="instructor"
    //               />
    //             </div>
    //           </div>
    //         </div>
    // `;
}
