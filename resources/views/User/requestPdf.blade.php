<div style="margin-left:50px; font-family=Times New Roman;">
    <center><div class="mt-5">
        <h2>JAMHURI YA MUUNGANO WA TANZANIA<br>
        OFISI YA RAIS - TAWALA ZA MIKOA NA SERIKALI ZA MITAA</h2><br>
        <!-- logo here -->
        <!-- <img src="{{ asset('tamisemi_logo.png') }}" alt=""> -->
        <br><br>
        KIBALI CHA KUSAFIRI NJE YA KITUO CHA KAZI<br>
        (WATUMISHI WASIO WAKUU WA IDARA/VITENGO)<br><br>

        
        
    </div></center>
    <h4>SEHEMU A: MTUMISHI ANAESAFIRI KIKAZI NDANI YA NCHI</h4>
    <div><h5 class="">(Maelezo binafsi ya Mtumishi kuhusu safari)</h5></div>
        <ol>
            <li>Jina Kamili la Mtumishi {{$data[0] ->firstName}}  {{$data[0] -> lastName}}</li>
            <li class="mt-3">Idara/Kitengo {{$data[0] -> divisionTitle}}</li>
            <li> Cheo {{$data[0] -> rankName}}</li>
            <li>Naomba kibali cha kusafiri kwenda Mkoa/Wilaya ya {{$data[0] -> destination}}<br>
            Tarehe ya kuondoka {{$data[0] -> startDate}} Tarehe ya kurudi {{$data[0] ->endDate}}.</li>
            <li>Madhumuni ya kusafiri ni {{$data[0] -> requestDesc}}</li>
            <li>Gharama za safari zitalipwa na (Idara/Kitengo/Mradi) ................</li>
            <li>Mawasiliano yako
                <ol>
                    <li>Namba ya Simu {{$data[0] -> phone}}</li>
                    <li>Email {{$data[0] ->email}}</li>
                </ol>
            </li>
        </ol>
    <div class="mt-2">
        <span>Tarehe <?php echo substr($data[0] -> created_at,0,10);  ?></span>
    </div>

    <div class="mt-2">
        <div class="justify-content-center">
            <h4>SEHEMU B: MKUU WA IDARA/KITENGO</h4>
        </div>
        <div><h5 class="">(Maoni ya Mkuu wa Idara/Kitengo)</h5></div>
        <ol>
            <li>
                <?php    
                    if($data[0] -> approveStatus == "approved")
                    {
                        echo "Nakubali";
                    }
                    else if($data[0] ->approveStatus == "disapproved"){
                        echo "Sikubali";
                    }

                ?>
                
                    Ombi lako kwa sababu ...................<br>
                    Tarehe ya kuondoka {{$data[0] -> startDate}}       Tarehe ya kurudi {{$data[0] ->endDate}}
            </li>
            <li>Gharama za safari zitalipwa na ..................</li>  
        </ol>
        Tarehe.............
    </div>
</div>


