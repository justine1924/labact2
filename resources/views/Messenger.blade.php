<x-app-layout>
<x-messenger />

<script>
    $(document).ready(function(){
        
            function showmsg(){
                $.ajax({
                    url: '{{ route("display.pay") }}', 
                    type: 'GET',  
                    dataType: 'json',  
                    success: function(response) {
                       
                        $('#result').html('<p>Name: ' + response.name + '</p><p>Age: ' + response.age + '</p><p>Location: ' + response.location + '</p>');
                    },
                    error: function(xhr, status, error) {
                        
                        console.log('AJAX Error: ' + status + ' - ' + error);
                    }
            });
            setTimeout(showmsg, 1000);
    
}

        });
</script>
</x-app-layout>