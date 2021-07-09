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
            this.ans = JSON.parse(getdata.responseText)
            console.log(this.ans)
            success(this.ans);
        }
    }
}

document.querySelectorAll('.homeblock-form').forEach((form)=>{
    form.addEventListener('submit',(e)=>{
        e.preventDefault()
        e.stopPropagation()

        input = form.querySelector('input')

        data = {}

        if (input.value.lenght < 1) return false;
        data[input.name] = input.value

        $Request = new DataRequest();
        $Request.getdata(form.dataset.method,data,(ans)=>{
            title = document.querySelector('.result-title');
            title.classList.remove('hidden');
            // удаление ранее созданных позиций
            list = document.querySelector('.result-body_list');
            list.querySelectorAll('li').forEach(item=>{
                item.remove()
            })
            if (ans.status === 1) {
                title.innerHTML = 'Найден <strong>' + ans.data.count + '</strong> панидром (-ов)';
                // генерация возвращенных вариантов
                ans.data.list.forEach(item=>{
                    let $elem = document.createElement('li');
                    $elem.innerHTML = item;
                    list.append($elem);
                }) 
            } else {
                title.innerHTML = ans.data.error;
            }
        })


        return false;
    })
})