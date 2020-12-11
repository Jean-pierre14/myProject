// blog

function findAll(){
    fetch('http://localhost:7000/blog').then(
        res => {
            res.json().then(data =>{
                if(data.length > 0){
                    var blog = ''
                    data.forEach(item=>{
                        let time = new Date(item.create_at)
                        time = `${time.getDate()}/${time.getMonth()}/${time.getFullYear()} >> ${time.getHours() < 10 ? '0' : ''}${time.getHours()}:${time.getMinutes() < 10 ? '0' : ''}${time.getMinutes()}`
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
                                        
                                        <small>
                                            ${time}
                                        </small>
                                    </p>
                                </div>
                            </div>
                        `
                    })
                    document.getElementById('blog').innerHTML = blog
                    $('.body-not').animate({scrollTop: $('.body-not')[0].scrollHeight}, 1000);
                }
            }).catch(err=>{if(err) throw err})
        }
    )
}

// Add blog
let add = document.getElementById('Add-blog')

const errors = []

// add.addEventListener('click', addPost)

function addPost(e){
    e.preventDefault();
    
    let user_id = document.getElementById('user_id').value
    // let context = document.getElementById('ContextMsg').value.trim()
    let context = $('#ContextMsg').val()
    // Validation
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
        $('#ContextMsg').val('')
        // window.location.href = 'notifications.php'
    }
}
// End blog


// Jquery



$(document).ready(function(){
    findAll()
});

// Axios
const newProgramme = document.getElementById('programmeEvent')
newProgramme.addEventListener('click', ProgrammePost)
function ProgrammePost() {
    const userId = document.getElementById('userId').value
    const title = document.getElementById('title').value
    const content = document.getElementById('content').value
    
    if (!userId || !title || !content) {
        document.getElementById('error').innerHTML = '<p class="alert alert-danger">Fields are not complete</p>'
    } else {
        axios({
            method: 'POST',
            url: 'http://localhost:7000/programmes',
            data: {userId, title, content}
        }).then(() => {
            location.href='http://localhost/erc.com/admin/notifications.php?event=programme'
        }).catch(err=> console.error(err))
    }
}