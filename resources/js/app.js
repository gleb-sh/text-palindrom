class DataRequest
{
    answer = null;

    getdata(method, data, success = function(ans) {} )
    {
        let getdata = new XMLHttpRequest();
        getdata.open('POST','/' + method,true)
        getdata.setRequestHeader('Content-Type','application/json; charset=utf-8')
        getdata.send( JSON.stringify(data) )
        getdata.onreadystatechange = function() {
            if (getdata.readyState != 4) return;        
            ans = JSON.parse(getdata.responseText)
            console.log(ans)
            this.ans = ans;
            succses(ans);
        }
    }
}

document.querySelectorAll('.homeblock-form').forEach((form)=>{
    form.addEventListener('submit',(e)=>{
        e.preventDefault()
        e.stopPropagation()

        input = form.querySelector('input')

        data = {}

        if (input.value.lenght > 0) {
            data[input.name] = input.value
        }

        $Request = new DataRequest();
        $Request.getdata(form.dataset.method,data,(ans)=>{
            title = document.querySelector('.result-title');
            title.innerHTML = ans.data.title;
            title.classList.remove('hidden')
            list = document.querySelector('.result-body_list');
            // генерация вовзращенных вариантов
        })


        return false;
    })
})