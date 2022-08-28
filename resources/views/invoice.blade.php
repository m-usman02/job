
<div>
    <table style="width: 100%; margin-top: 20px; padding: 3px; background-color: white;" cellpadding="12" cellspacing="0">
        <tr>
            <td style="width: 55%;  color: black;">
            <p>
            <img src="{{public_path('logo.png')}}" alt="" style="width: 80%; height:70px;">
            </p>
            <p>
                
                
                <span style="font-weight:bold; font-size:13px;">ABN: 24076563638 Phone: 1300968976</span>
                <br>
                <span style="font-weight:bold; font-size:13px;">Email: info@datarecoveryzone.com.au</span>
            </p>
            <p>
                <span style="font-weight:bold; font-size:13px;">BILL TO:</span>
                <br>
                <span style="font-size:13px;">Name:</span>&nbsp;&nbsp;<span style="font-size:13px;">{{!empty($job['customer']) ? $job['customer']['first_name']." ". $job['customer']['last_name'] : " " }}</span>
            
               
                <br>
                <span style="font-size:13px;">Street Address:</span>&nbsp;&nbsp;<span style="font-size:13px;">{{!empty($job['customer']) ? $job['customer']['address'] : " " }}</span>
                <br>
                <span style="font-size:13px;">Contact:</span>&nbsp;&nbsp;<span style="font-size:13px;">{{!empty($job['customer']) ? $job['customer']['phone'] : " " }}/{{!empty($job['customer']) ? $job['customer']['email'] : " " }}</span>
            </p>
            </td>
            <td style="width: 10%;  color: black; font-size:13px;">
                <br><br><br><br><br><br>
                <span>STATUS:</span>
            </td>
            <th style="width: 15%;  color: black; font-size:13px;">
                <br><br>
                <span>DATE:</span>
                <br>
                <span>INVOICE #</span>
                <br>
               
                <br><br><br><br>
            </th>
            <td style="width: 30%;  color: black; font-size:13px;">
                <span style="text-align: center; margin-top: 10px; color: rgb(7, 172, 237); font-size:30px; font-weight: bold; text-align: center; position: fixed;">INVOICE</span>
                <br>
            <span> {{$job['created_at']}} </span>
            <br>
            <span>{{$job['job_id']}} </span>
           
            <br><br><br>
            <span style="text-align: left;">{{$job['status']}}</span>
            </td>
        </tr>
        </table>
</div>
<div>
    <table style="border:1px solid black; width: 100%; margin-top: 20px; padding: 3px; background-color: white;" cellpadding="12" cellspacing="0">
        <tr style="">
            <th style="border:1px solid black; width: 55%;  color: black; text-align: center; font-size:13px; background-color:rgb(12, 172, 235)">DESCRIPTION</th>
            <th style="border:1px solid black; width: 10%; color: black; text-align: center; font-size:13px; background-color:rgb(12, 172, 235)">QTY/th>
            <th style="border:1px solid black; width: 15%; color: black; text-align: center; font-size:13px; background-color:rgb(12, 172, 235)">PRICE</th>
            <th style="border:1px solid black; width: 30%; color: black; text-align: center; font-size:13px; background-color:rgb(12, 172, 235)">AMOUNT</th>
        </tr>
    
        <tr style="background-color: rgb(233, 230, 230); color:black; font-size: 13px;">
            <td style="border-left:1px solid black; width: 55%;">{{$job['issue_described']}}</td>
            <td style="border-left:1px solid black; width: 10%;">1.00</td>
            <td style="border-left:1px solid black; width: 15%;">${{$job['price']}}</td>
            <td style="border-left:1px solid black; width: 30%; background-color: rgb(233, 230, 230)">${{$job['price']}}</td>
        </tr>
        <tr style="background-color: white; color:black; font-size: 13px;">
            <td style="border-left:1px solid black; width: 55%;"></td>
            <td style="border-left:1px solid black; width: 10%;"></td>
            <td style="border-left:1px solid black; width: 15%;"></td>
            <td style="border-left:1px solid black; width: 30%; background-color: rgb(233, 230, 230)"></td>
        </tr>
        <tr style="background-color: rgb(233, 230, 230); color:black; font-size: 13px;">
            <td style="border-left:1px solid black; width: 55%;"></td>
            <td style="border-left:1px solid black; width: 10%;"></td>
            <td style="border-left:1px solid black; width: 15%;"></td>
            <td style="border-left:1px solid black; width: 30%; background-color: rgb(233, 230, 230)"></td>
        </tr>
        <tr style="background-color: white; color:black; font-size: 13px;">
            <td style="border-left:1px solid black; width: 55%;"></td>
            <td style="border-left:1px solid black; width: 10%;"></td>
            <td style="border-left:1px solid black; width: 15%;"></td>
            <td style="border-left:1px solid black; width: 30%; background-color: rgb(233, 230, 230)"></td>
        </tr>
        <tr style="background-color: rgb(233, 230, 230); color:black; font-size: 13px;">
            <td style="border-left:1px solid black; width: 55%;"></td>
            <td style="border-left:1px solid black; width: 10%;"></td>
            <td style="border-left:1px solid black; width: 15%;"></td>
            <td style="border-left:1px solid black; width: 30%; background-color: rgb(233, 230, 230)"></td>
        </tr>
        <tr style="background-color: white; color:black; font-size: 13px;">
            <td style="border-left:1px solid black; width: 55%;"></td>
            <td style="border-left:1px solid black; width: 10%;"></td>
            <td style="border-left:1px solid black; width: 15%;"></td>
            <td style="border-left:1px solid black; width: 30%; background-color: rgb(233, 230, 230)"></td>
        </tr>
        <tr style="background-color: rgb(233, 230, 230); color:black; font-size: 13px;">
            <td style="border-left:1px solid black; width: 55%;"></td>
            <td style="border-left:1px solid black; width: 10%;"></td>
            <td style="border-left:1px solid black; width: 15%;"></td>
            <td style="border-left:1px solid black; width: 30%; background-color: rgb(233, 230, 230)"></td>
        </tr>
        <tr style="background-color: white; color:black; font-size: 13px;">
            <td style="border-left:1px solid black; width: 55%;"></td>
            <td style="border-left:1px solid black; width: 10%;"></td>
            <td style="border-left:1px solid black; width: 15%;"></td>
            <td style="border-left:1px solid black; width: 30%; background-color: rgb(233, 230, 230)"></td>
        </tr>
        <tr style="background-color: rgb(233, 230, 230); color:black; font-size: 13px;">
            <td style="border-left:1px solid black; width: 55%;"></td>
            <td style="border-left:1px solid black; width: 10%;"></td>
            <td style="border-left:1px solid black; width: 15%;"></td>
            <td style="border-left:1px solid black; width: 30%; background-color: rgb(233, 230, 230)"></td>
        </tr>
        <tr style="background-color: white; color:black; font-size: 13px;">
            <td style="border-left:1px solid black; border-bottom: 1px solid black; width: 55%;"></td>
            <td style="border-left:1px solid black; border-bottom: 1px solid black; width: 10%;"></td>
            <td style="border-left:1px solid black; border-bottom: 1px solid black; width: 15%;"></td>
            <td style="border-left:1px solid black; border-bottom: 1px solid black; width: 30%; background-color: rgb(233, 230, 230)"></td>
        </tr>
        </table>
        <div>
            <table style="width: 99.7%; margin-top:-3px; background-color: white;" cellpadding="12" cellspacing="0">
                <tbody>
                    <tr style="background-color: white; color:black; font-size: 13px;">
                        <td style="width: 73.5%;"></td>
                        <td style="width: 10%; font-weight: bold;">TOTAL:</td>
                        <td style="border:1px solid black; width: 24.1%; background-color: rgb(233, 230, 230)">${{$job['price']}}</td>
                    </tr>
                    <tr style="background-color: white; color:black; font-size: 13px;">
                        <td style="width: 73.5%;">
                            <span style="font-weight: bold;"><u>REPORT:</u></span>
                            <br>
                            <span>
                            {{$job['issue_found']}}
                            </span>
                        </td> 
                        
                        <td style="width: 10%; font-weight: bold;">GST:</td>
                        <td style="border:1px solid black; width: 24.1%; background-color: rgb(233, 230, 230)">${{number_format($job['price'] / 11,2)}}</td>
                        
                    </tr>
                    <tr style="background-color: white; color:black; font-size: 13px;">
                        <td style="width: 73.5%;">
                            <span style="font-weight: bold;"><u>Note:</u></span>
                            <br>
                            <span>
                            {{$job['note']}}
                            </span>
                        </td> 
                        
                        <td style="width: 10%; font-weight: bold;"></td>
                        <td style="width: 24.1%;"></td>
                        
                    </tr>
                    
                </tbody>
            </table>
        </div>
</div>