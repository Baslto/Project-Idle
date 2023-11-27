let sidebarButtons = document.getElementsByClassName('sidebar-button')
let views = document.getElementsByClassName('view')
let creationButtons = document.getElementsByClassName('creation-button')
invertedArray = (a, n) => {
    return a.slice(0, n).concat(a.slice(n+1))
}

for (let i = 0; i < sidebarButtons.length; i++) {
    sidebarButtons[i].addEventListener('click', function(){
        views[i].classList.toggle('hidden')
        result = invertedArray(Array.from(views), i)
        for (let index = 0; index < result.length; index++) {
            if (!result[index].classList.contains('hidden')) {
                result[index].classList.add('hidden')   
            }           
        }      
    })
}

for (let i = 0; i < creationButtons.length; i++) {
    creationButtons[i].addEventListener('click', function(){
        document.getElementById('character-creation-container').classList.toggle('hidden')
    })
}
