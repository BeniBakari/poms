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
                                <button class="btn-sm rounded">edit</button>
                            </a>    
                        </td>
                        <td>
                            <a href="<?php if($user->status == "Inactive") echo "activate"; else echo "deactivate" ?>?id={{$user -> id}}">
                                <button class="btn-sm rounded">
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