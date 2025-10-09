@if (session('success'))
    <div class="alert alert-success" 
            style="padding: 10px; margin-bottom: 20px; 
                    background-color: #d4edda; 
                    color: #155724; 
                    border-color: #c3e6cb; 
                    border-radius: 5px;">
        {{ session('success') }}
    </div>
@endif
@if (session('danger'))
    <div class="alert alert-danger" 
        style="padding: 10px; margin-bottom: 20px; 
                background-color: #f8d7da; 
                color: #721c24; 
                border-color: #f5c6cb; 
                border-radius: 5px;">
        {{ session('danger') }}
    </div>
@endif