$(function() {
    console.log('JQuery is work!');
    $('#task-result').hide();

    $('#search').keyup(function(){
        if($('#search').val()) {
            let search = $('#search').val();
            $.ajax({
                url : '/tasks-search',
                type: 'POST',
                data: {search},
                headers : {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success : function(response){
                    if(response.length !== 0){
                        let template = '';
                        response.forEach(task => {
                            template += `<li>
                                ${task.name}
                            </li>`;
                        });
                        $('#container').html(template)
                        $('#task-result').show();
                    }
                }
            })
        }else{
            $('#container').html('');
            $('#task-result').hide();

        }
    })
})