// blog
findAll()
function findAll(){
    fetch('http://localhost:7000/blog').then(
        res => {
            res.json().then(data =>{
                if(data.length > 0){
                    var blog = ''
                    
                    data.forEach(item=>{
                        blog += `
                            <div class="bg-white p-3 shadow m-3">
                                <p class="text-blog p-0 m-0">
                                    ${item.context}
                                </p>
                                <div class="footer-blog">
                                    <p class="d-flex p-0 m-0 justify-content-between align-items-center">
                                        <span>
                                            <img src="../${item.profile_pic}" alt="UserImg" class="img-fluid boule">
                                            <span>
                                                ${item.username}
                                            </span>
                                        </span>
                                        
                                        <span>
                                            ${item.create_at}
                                        </span>
                                    </p>
                                </div>
                            </div>
                        `
                    })
                    document.getElementById('blog').innerHTML = blog
                }
            }).catch(err=>{if(err) throw err})
        }
    )
}

// Add blog
let add = document.getElementById('Add-blog')

const errors = []

add.addEventListener('click', addPost)

function addPost(e){
    e.preventDefault(e);
    
    let user_id = document.getElementById('user_id').value
    let context = document.getElementById('ContextMsg').value

    if(!user_id || !context){
        alert("Message is empty")
    }else{
        
        fetch('http://localhost:7000/blog', {
            method: 'POST',
            headers: {
                'Accept': 'application/json, text/plain, */*',
                'Content-type': 'application/json'
            },body: JSON.stringify({user_id: user_id, context: context})
        })
        findAll()
        window.location.href = 'notifications.php'
    }
}
// End blog


// Jquery

$(document).ready(function(){
    $('.body-not').animate({
        scrollTop: $('.body-not').prop('scrollHeight')
    }, 1000)
});