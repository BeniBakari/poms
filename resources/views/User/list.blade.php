@if($users != null)
 
<table class="table" >
            <thead class="text-white" style="background-color:#013C5C; ">
                <tr>
                    <th>#</th>
                    <th>User Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Designation</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $num=0; ?>
                @foreach($users as $user)  
                    <tr>
                        <td><?php echo ++$num; ?></td> 
                        <td>{{$user -> id}}</td>
                        <td>{{$user -> firstName}} {{$user -> lastName}}</td>
                        <td>{{$user -> email}}</td>
                        <td style="<?php if($user->status == "Inactive") {?> color:red; <?php }?>">{{$user -> status}}</td>
                        <td>{{$user -> rankName}}</td>
                        <td>
                            <a href="profile?id={{$user -> id}}">
                                <button class=" btn btn-primary btn-sm rounded-pill">edit</button>
                            </a>    
                        </td>
                        <td>
                            <a href="<?php if($user->status == "Inactive") echo "activate"; else echo "deactivate" ?>?id={{$user -> id}}">
                                <button class="btn btn-primary btn-sm rounded-pill">
                                    <?php 
                                        if($user->status == "Inactive") echo "Activate";
                                        else echo "Deactivate";
                                    ?>
                                </button>
                            </a> 
                        </td>
                    </tr>
                @endforeach
                
            </tbody>         
        </table>
    {{ $users->links() }} 
@else
   <h3>{{$request }} record's is not found</h3>
@endif

