<div class="col-md-12 bg-primary"><h3>Sales</h3></div>
<div class="col-md-12">
<div class="panel with-nav-tabs">
    <div class="panel-heading">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tabprimary" data-toggle="tab">Overall Sales</a></li>
            <li><a href="#tab1primary" data-toggle="tab">Warehouse</a></li>
            <li><a href="#tab2primary" data-toggle="tab">Branch 1</a></li>
            <li><a href="#tab3primary" data-toggle="tab">Branch 2</a></li>
            <li><a href="#tab4primary" data-toggle="tab">Corporate Account</a></li>
            <li><a href="#tab5primary" data-toggle="tab">Branch Partner</a></li>
            <!--<li class="dropdown">
                <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#tab4primary" data-toggle="tab">Primary 4</a></li>
                    <li><a href="#tab5primary" data-toggle="tab">Primary 5</a></li>
                </ul>
            </li>-->
        </ul>
    </div>
    <div class="panel-body">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tabprimary">
                <div class="row">
                    
                    <!--
                    <div class="col-md-12">
                         <div class="col-md-4"><button class="btn btn-primary" style="width:100%">Yearly Sales list</button></div>
                         <div class="col-md-4"><button class="btn btn-success" style="width:100%">Monthly Sales list</button></div>
                         <div class="col-md-4"><button class="btn btn-danger" style="width:100%">Daily Sales list</button></div>
                    </div>
                    -->
                    <div class="col-md-12" style="margin-top:10px;">
                        <div class="col-md-5">
                           <select class="form-control" id="selectYorM" onchange="selectYorM()">
                               <option value="" selected>All Sales</option>
                               <option value="">Paid</option>
                               <option value="">Unpaid</option>
                           </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-1">
                            <input type="text" value="TO" class="form-control" disabled style="border:none; background-color:white;">
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                    </div> 
                    
                    <div class="col-md-12" style="margin-top:10px;">
                        <input type="search" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-md-12" style="margin-top:10px;">
                        
                        <div id="displayallsales"></div>
                        
                    </div>
                </div> 
            </div> 
            <div class="tab-pane fade" id="tab1primary">
                <div class="row">
                    <div class="col-md-12" style="margin-top:10px;">
                        <div class="col-md-5">
                           <select class="form-control" id="selectYorM" onchange="selectYorM()">
                               <option disabled selected >Select</option>
                               <option value="yearly">All Sales</option>
                               <option value="monthly">Paid</option>
                               <option value="monthly">Unpaid</option>
                           </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-1">
                            <input type="text" value="TO" class="form-control" disabled style="border:none; background-color:white;">
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                    </div> 
                    
                    <div class="col-md-12" style="margin-top:10px;">
                        <input type="search" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-md-12" style="margin-top:10px;">
                        
                        <div id="warehousedisplay"></div>
                        
                    </div>
                </div> 
            </div>
            <div class="tab-pane fade" id="tab2primary">
                <div class="row">
                    <div class="col-md-12" style="margin-top:10px;">
                        <div class="col-md-5">
                           <select class="form-control" id="selectYorM" onchange="selectYorM()">
                               <option disabled selected >Select</option>
                               <option value="yearly">All Sales</option>
                               <option value="monthly">Paid</option>
                               <option value="monthly">Unpaid</option>
                           </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-1">
                            <input type="text" value="TO" class="form-control" disabled style="border:none; background-color:white;">
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                    </div> 
                    
                    <div class="col-md-12" style="margin-top:10px;">
                        <input type="search" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-md-12" style="margin-top:10px;">
                        
                        <div id="branch1display"></div>
                        
                    </div>
                </div> 
            </div>
            <div class="tab-pane fade" id="tab3primary">
                <div class="row">
                    <div class="col-md-12" style="margin-top:10px;">
                        <div class="col-md-5">
                           <select class="form-control" id="selectYorM" onchange="selectYorM()">
                               <option disabled selected >Select</option>
                               <option value="yearly">All Sales</option>
                               <option value="monthly">Paid</option>
                               <option value="monthly">Unpaid</option>
                           </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-1">
                            <input type="text" value="TO" class="form-control" disabled style="border:none; background-color:white;">
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                    </div> 
                    
                    <div class="col-md-12" style="margin-top:10px;">
                        <input type="search" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-md-12" style="margin-top:10px;">
                        
                    </div>
                </div> 
            </div>
            <div class="tab-pane fade" id="tab4primary">
                <div class="row">
                     <div class="col-md-12"  style="margin-top:10px;">
                        <select class="form-control">
                            <option disabled selected>Selct corporate account</option>
                            <option>corporate account 1</option>
                            <option>corporate account 2</option>
                            <option>corporate account 3</option>
                            <option>corporate account 4</option>
                            <option>corporate account 5</option>
                        </select>
                    </div>
                    <div class="col-md-12" style="margin-top:10px;">
                        <div class="col-md-5">
                           <select class="form-control" id="selectYorM" onchange="selectYorM()">
                               <option disabled selected >Select</option>
                               <option value="yearly">All Sales</option>
                               <option value="monthly">Paid</option>
                               <option value="monthly">Unpaid</option>
                           </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-1">
                            <input type="text" value="TO" class="form-control" disabled style="border:none; background-color:white;">
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                    </div> 
                    
                    <div class="col-md-12" style="margin-top:10px;">
                        <input type="search" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-md-12" style="margin-top:10px;">
                    </div>
                </div> 
            
            </div>
            <div class="tab-pane fade" id="tab5primary">         
                <div class="row">
                    <div class="col-md-12" style="margin-top:10px;">
                        <select class="form-control">
                            <option disabled selected>Selct Branch partner</option>
                            <option>branch partner 1</option>
                            <option>branch partner 2</option>
                            <option>branch partner 3</option>
                            <option>branch partner 4</option>
                            <option>branch partner 5</option>
                        </select>
                    </div>
                    <div class="col-md-12" style="margin-top:10px;">
                        <div class="col-md-5">
                           <select class="form-control" id="selectYorM" onchange="selectYorM()">
                               <option disabled selected >Select</option>
                               <option value="yearly">All Sales</option>
                               <option value="monthly">Paid</option>
                               <option value="monthly">Unpaid</option>
                           </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-1">
                            <input type="text" value="TO" class="form-control" disabled style="border:none; background-color:white;">
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                    </div> 
                    
                    <div class="col-md-12" style="margin-top:10px;">
                        <input type="search" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-md-12" style="margin-top:10px;">
                        
                    </div>
                </div> 
            
            </div>
        </div>
    </div>
</div>
</div>

<script>
$(document).ready(function () {
    displayallsales(); 
    warehousedisplay(); 
    branch1display(); 
	});
    
    function displayallsales(){

    var displayallsales = "displayallsales";
    $.ajax({
        url:"assets/partials/salesfunction/allsalesdisplay.php",
        type:"POST",
        data:{
            displayallsales:displayallsales
        },
        success:function(data,status){
            $('#displayallsales').html(data);
        },

    });
}    
   
    function warehousedisplay(){

    var warehousedisplay = "warehousedisplay";
    $.ajax({
        url:"assets/partials/salesfunction/warehousedisplay.php",
        type:"POST",
        data:{
            warehousedisplay:warehousedisplay
        },
        success:function(data,status){
            $('#warehousedisplay').html(data);
        },

    });
}   
    function branch1display(){

    var branch1display = "branch1display";
    $.ajax({
        url:"assets/partials/salesfunction/branch1display.php",
        type:"POST",
        data:{
            branch1display:branch1display
        },
        success:function(data,status){
            $('#branch1display').html(data);
        },

    });
}
    
</script>