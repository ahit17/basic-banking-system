<?php
include 'connection.php';
$sender=$_POST['sender'];
$receiver=$_POST['receiver'];
$amount=$_POST['amount'];
if($sender==$receiver)
{
     echo(" 
     <script>
     alert('Something Went Wrong!!!Please Try Again')
     window.location.href='index.html'
     </script>
     ");

}

else
{
    $select="SELECT * from User_data where Username='$sender'";
    $query1=$conn->query($select);
    $res=mysqli_fetch_array($query1);
    if($res['Balance']<$amount)
    {
        echo(" 
        <script>
        alert('Something Went Wrong!!!Please Try Again')
        window.location.href='index.html'
        </script>
        ");
    }
    else
    {
        $money1=$res['Balance']-$amount;
        $select1="UPDATE User_data set Balance='$money1' where Username='$sender' ";
        $query1=$conn->query($select1);
        $select2="SELECT * from User_data where Username='$receiver'";
        $query2=$conn->query($select2);
        $res2=mysqli_fetch_array($query2);
        $money2=$res2['Balance']+$amount;
        $select3="UPDATE User_data set Balance='$money2' where Username='$receiver' ";
        $query3=$conn->query($select3);
        if($query1 && $query3)
        {
             $insert="INSERT INTO all_transaction SET Sender='$sender' ,Reciever='$receiver' , Amount='$amount'";
             $query4=$conn->query($insert);
             echo(" 
             <script>
             alert('Success')
             window.location.href='users.php'
             </script>
             ");
        }
        else
        {
             echo(" 
            <script>
            alert('Something Went Wrong!!!Please Try Again')
            window.location.href='index.html'
            </script>
            ");
        }

    }
}
?>