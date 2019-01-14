<?php
class DbOperation
{//kjhkjhkjl;;lk;;lk;l
    private $con;
    function __construct()
    {
        require_once dirname(__FILE__) . '/DbConnect.php';
        $db = new DbConnect();
        $this->con = $db->connect();
    }
    function GetKimboshlashi($koo){

        $path="../json/".$koo.".json";
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
      //  $json_a["name"]="Bosqa".$i.$json_a["age"][1].$json_a["city"][0]["1"][1];
        $koo=$json_a["KimBoshlashi"];

        /*    //write
            $fp = fopen('../includes/test.json', 'w');
            fwrite($fp, json_encode($json_a));
            fclose($fp);

          /*  $stmt2=$this->con->prepare("SELECT Kimboshlashi FROM groups WHERE NumberOfGroup=?");
            $stmt2->bind_param("i",$koo);
            $stmt2->execute();
            $stmt2->bind_result($koo);
            $stmt2->fetch();*/
        return $koo;
    }
    function GetHowmanyPlayers($koo){
        $path="../json/".$koo.".json";
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        //  $json_a["name"]="Bosqa".$i.$json_a["age"][1].$json_a["city"][0]["1"][1];
        $koo=$json_a["howmanyplayers"];
      /*
        $stmt2=$this->con->prepare("SELECT HowManyPlayers FROM groups WHERE NumberOfGroup=?");
        $stmt2->bind_param("i",$koo);
        $stmt2->execute();
        $stmt2->bind_result($koo);
        $stmt2->fetch();*/
        return $koo;
    }
    function SetTikilganPullar($nmaligi,$value,$GroupNumber){

        $path="../json/".$GroupNumber.".json";
        $int=(int)substr($nmaligi,strlen($nmaligi)-1,1);
        $int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
          $json_a["TikilganPullar"][$int]=$value;

            //write
            $fp = fopen($path, 'w');
            fwrite($fp, json_encode($json_a));
            fclose($fp);
          /*
        $stmt =$this->con->prepare("UPDATE tikilganpullar SET $nmaligi = ? WHERE GroupNumber = ?");
        $stmt->bind_param("si",$value,$GroupNumber);
        $stmt->execute();*/
    }
    function GetTikilganPullar($GroupNumber ,$TikilganPullar){

        $path="../json/".$GroupNumber.".json";
        $int=(int)substr($TikilganPullar,strlen($TikilganPullar)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        //  $json_a["name"]="Bosqa".$i.$json_a["age"][1].$json_a["city"][0]["1"][1];
        $GroupNumber=$json_a["TikilganPullar"][$int];

      /*  $stmt2=$this->con->prepare("SELECT $TikilganPullar FROM tikilganpullar WHERE GroupNumber=?");
        $stmt2->bind_param("s",$GroupNumber);
        $stmt2->execute();
        $stmt2->bind_result($GroupNumber);
        $stmt2->fetch();*/
        return $GroupNumber;
    }
    function SetJavoblade($nmaligi,$value,$GroupNumber){


        $path="../json/".$GroupNumber.".json";
        $int=(int)substr($nmaligi,strlen($nmaligi)-1,1);
        //read
        $int=$int-1;
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["Javoblade"][$int]=$value;

        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);
        /*
        $stmt =$this->con->prepare("UPDATE javoblade SET $nmaligi = ? WHERE groupnumber = ?");
        $stmt->bind_param("si",$value,$GroupNumber);
        $stmt->execute();*/
    }
    function GetJavoblade($GroupNumber ,$Javoblade){


        $path="../json/".$GroupNumber.".json";
        $int=(int)substr($Javoblade,strlen($Javoblade)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        //  $json_a["name"]="Bosqa".$i.$json_a["age"][1].$json_a["city"][0]["1"][1];
        $GroupNumber=$json_a["Javoblade"][$int];

       /** $stmt2=$this->con->prepare("SELECT $Javoblade FROM javoblade WHERE GroupNumber=?");
        $stmt2->bind_param("s",$GroupNumber);
        $stmt2->execute();
        $stmt2->bind_result($GroupNumber);
        $stmt2->fetch();*/
        return $GroupNumber;
    }
    function SetHowManyPlayers($value,$GroupNumber){

        $path="../json/".$GroupNumber.".json";
        //$int=(int)substr($nmaligi,strlen($nmaligi)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["howmanyplayers"]=$value;

        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);
       /*
        $stmt =$this->con->prepare("UPDATE groups SET HowManyPlayers = ? WHERE NumberOfGroup = ?");
        $stmt->bind_param("si",$value,$GroupNumber);
        $stmt->execute();*/
    }
    function SetUyinchilar($value,$GroupNumber){
        $path="../json/".$GroupNumber.".json";
        //$int=(int)substr($nmaligi,strlen($nmaligi)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["Uyinchilar"]=$value;

        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);

     /*   $sql="UPDATE groups SET uyinchilar=? WHERE NumberOfGroup=? ";
        $stmt =$this->con->prepare($sql);
        $stmt->bind_param("si",$value,$GroupNumber);
        $stmt->execute();**/
    }
    function Getuyinchilar($grouppade){

        $path="../json/".$grouppade.".json";
        //$int=(int)substr($Javoblade,strlen($Javoblade)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        //  $json_a["name"]="Bosqa".$i.$json_a["age"][1].$json_a["city"][0]["1"][1];
        $grouppade=$json_a["Uyinchilar"];

       /* $stmt2=$this->con->prepare("SELECT uyinchilar FROM groups WHERE NumberOfGroup=?");
        $stmt2->bind_param("i",$grouppade);
        $stmt2->execute();
        $stmt2->bind_result($grouppade);
        $stmt2->fetch();**/
        return $grouppade;
    }
    function SetHuy($value,$GroupNumber){

        $path="../json/".$GroupNumber.".json";
        //$int=(int)substr($nmaligi,strlen($nmaligi)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["Huy"]=$value;

        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);
      /*
        $stmt =$this->con->prepare("UPDATE groups SET huy = ? WHERE NumberOfGroup = ?");
        $stmt->bind_param("ii",$value,$GroupNumber);
        $stmt->execute();*/
    }
    function GetHuy($GroupNUmber){

        $path="../json/".$GroupNUmber.".json";
        //$int=(int)substr($Javoblade,strlen($Javoblade)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        //  $json_a["name"]="Bosqa".$i.$json_a["age"][1].$json_a["city"][0]["1"][1];
        $GroupNUmber=$json_a["Huy"];

       /* $stmt2=$this->con->prepare("SELECT huy FROM groups WHERE NumberOfGroup=?");
        $stmt2->bind_param("i",$GroupNUmber);
        $stmt2->execute();
        $stmt2->bind_result($GroupNUmber);
        $stmt2->fetch();*/
        return $GroupNUmber;
    }
    function Sethu3($value,$GroupNumber){

        $path="../json/".$GroupNumber.".json";
        //$int=(int)substr($nmaligi,strlen($nmaligi)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["hu3"]=$value;

        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);/*
        $stmt =$this->con->prepare("UPDATE groups SET hu3 = ? WHERE NumberOfGroup = ?");
        $stmt->bind_param("ii",$value,$GroupNumber);
        $stmt->execute();*/
    }
    function Gethu3($GroupNUmber){
        $path="../json/".$GroupNUmber.".json";
        //$int=(int)substr($Javoblade,strlen($Javoblade)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        //  $json_a["name"]="Bosqa".$i.$json_a["age"][1].$json_a["city"][0]["1"][1];
        $GroupNUmber=$json_a["hu3"];
        /*
        $stmt2=$this->con->prepare("SELECT hu3 FROM groups WHERE NumberOfGroup=?");
        $stmt2->bind_param("i",$GroupNUmber);
        $stmt2->execute();
        $stmt2->bind_result($GroupNUmber);
        $stmt2->fetch();*/
        return $GroupNUmber;
    }
    function SetYurishKimmiki($value,$GroupNumber){
        $path="../json/".$GroupNumber.".json";
        //$int=(int)substr($nmaligi,strlen($nmaligi)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["YurishKimmiki"]=$value;

        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);
        /*
        $stmt =$this->con->prepare("UPDATE groups SET YurishKimmiki = ? WHERE NumberOfGroup = ?");
        $stmt->bind_param("si",$value,$GroupNumber);
        $stmt->execute();*/
    }
    function SetError($value,$GroupNumber){
        $stmt =$this->con->prepare("INSERT INTO error1 (message,groupnumber ) VALUES (?,?)");
        $stmt->bind_param("si",$value,$GroupNumber);
        $stmt->execute();
    }
    function SetKartatarqatildi($value,$GroupNumber){
        $path="../json/".$GroupNumber.".json";
        //$int=(int)substr($nmaligi,strlen($nmaligi)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["Kartatarqaldi"]=$value;

        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);

      /*  $stmt =$this->con->prepare("UPDATE groups SET Kartatarqatildi = ? WHERE NumberOfGroup = ?");
        $stmt->bind_param("si",$value,$GroupNumber);
        $stmt->execute();**/
    }
    function SetKimboshlashi($value,$GroupNumber){
        $path="../json/".$GroupNumber.".json";
        //$int=(int)substr($nmaligi,strlen($nmaligi)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["KimBoshlashi"]=$value;

        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);
        /*
        $stmt =$this->con->prepare("UPDATE groups SET Kimboshlashi = ? WHERE NumberOfGroup = ?");
        $stmt->bind_param("ii",$value,$GroupNumber);
        $stmt->execute();*/
    }
    function SetXAmmakartalar($value,$GroupNumber){
        $path="../json/".$GroupNumber.".json";
        //$int=(int)substr($nmaligi,strlen($nmaligi)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["Xammakartalar"]=$value;

        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);
        /*
        $stmt =$this->con->prepare("UPDATE groups SET hammakartalar = ? WHERE NumberOfGroup = ?");
        $stmt->bind_param("si",$value,$GroupNumber);
        $stmt->execute();*/
    }
    function GetXAmmakartalar($ki1){
        $path="../json/".$ki1.".json";
        //$int=(int)substr($Javoblade,strlen($Javoblade)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        //  $json_a["name"]="Bosqa".$i.$json_a["age"][1].$json_a["city"][0]["1"][1];
        $ki1=$json_a["Xammakartalar"];
        /*
        $stmt2=$this->con->prepare("SELECT hammakartalar FROM groups WHERE NumberOfGroup=?");
        $stmt2->bind_param("s",$ki1);
        $stmt2->execute();
        $stmt2->bind_result($ki1);
        $stmt2->fetch();*/
        return $ki1;
    }
    function GetKartatarqatildi($ki1){
        $path="../json/".$ki1.".json";
        //$int=(int)substr($Javoblade,strlen($Javoblade)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        //  $json_a["name"]="Bosqa".$i.$json_a["age"][1].$json_a["city"][0]["1"][1];
        $ki1=$json_a["Kartatarqaldi"];

       /* $stmt2=$this->con->prepare("SELECT Kartatarqatildi FROM groups WHERE NumberOfGroup=?");
        $stmt2->bind_param("s",$ki1);
        $stmt2->execute();
        $stmt2->bind_result($ki1);
        $stmt2->fetch();*/
        return $ki1;
    }
    function GetYurishKimmiki($ki1){
        $path="../json/".$ki1.".json";
        //$int=(int)substr($Javoblade,strlen($Javoblade)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        //  $json_a["name"]="Bosqa".$i.$json_a["age"][1].$json_a["city"][0]["1"][1];
        $ki1=$json_a["YurishKimmiki"];
        /*
        $stmt2=$this->con->prepare("SELECT YurishKimmiki FROM groups WHERE NumberOfGroup=?");
        $stmt2->bind_param("s",$ki1);
        $stmt2->execute();
        $stmt2->bind_result($ki1);
        $stmt2->fetch();*/
        return $ki1;
    }
    function SEndMEssage($groupnumber,$index,$message){
        $index=$index-1;
        $path="../json/".$groupnumber.".json";
        //$int=(int)substr($nmaligi,strlen($nmaligi)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
       // $json_a["messages"][$index]=$message;
        array_push($json_a["messages"][$index], $message);

        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);

      /*$stmt2=$this->con->prepare("INSERT INTO messages (gropnumber,indexq,message) VALUES (?,?,?)");
        $stmt2->bind_param("iss",$groupnumber,$index,$message);
        $stmt2->execute();*/
    }
    function SEndMEssageToGroup($groupnumber,$indexs,$message){
        //$db=new DbOperation();
        $path="../json/".$groupnumber.".json";
        //$int=(int)substr($nmaligi,strlen($nmaligi)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        for($i=0;$i<strlen($indexs);$i++){
            $index=(int)substr($indexs,$i,1);
            $index=$index-1;

            // $json_a["messages"][$index]=$message;
            array_push($json_a["messages"][$index], $message);
       /*     $stmt2=$this->con->prepare("INSERT INTO messages (gropnumber,indexq,message) VALUES (?,?,?)");
            $stmt2->bind_param("iss",$groupnumber,$index,$message);
            $stmt2->execute();**/
        }
        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);
    }
    function Getgrop2help($grouppy){
        $path="../json/".$grouppy.".json";
        //$int=(int)substr($Javoblade,strlen($Javoblade)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        //  $json_a["name"]="Bosqa".$i.$json_a["age"][1].$json_a["city"][0]["1"][1];
        $grouppy=$json_a["grop2help"];
       /*
        $stmt2=$this->con->prepare("SELECT grop2help FROM groups WHERE NumberOfGroup=?");
        $stmt2->bind_param("s",$grouppy);
        $stmt2->execute();
        $stmt2->bind_result($grouppy);
        $stmt2->fetch();*/
        return $grouppy;
    }
    function Setgrop2help($lk,$value){
        $path="../json/".$lk.".json";
        //$int=(int)substr($nmaligi,strlen($nmaligi)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["grop2help"]=$value;

        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);
        /*
        $stmt2=$this->con->prepare("UPDATE groups SET grop2help = ? WHERE NumberOfGroup=?");
        $stmt2->bind_param("si",$value,$lk);
        $stmt2->execute();
        $stmt2->store_result();*/
    }
    function Creategrop2help($lk,$value){
        $path="../json/".$lk.".json";
        //$int=(int)substr($nmaligi,strlen($nmaligi)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["grop2help"]=$value;

        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);
/*
        $stmt =$this->con->prepare("INSERT IGNORE INTO  groups (grop2help,NumberOfGroup,Kartatarqatildi) VALUES(?,?,?)");
        $stmt->bind_param("sis",$value,$lk,$as);
        $stmt->execute();
        $stmt =$this->con->prepare("INSERT IGNORE INTO  tikilganpullar (GroupNumber) VALUES(?)");
        $stmt->bind_param("i",$lk);
        $stmt->execute();
        $stmt =$this->con->prepare("INSERT IGNORE INTO  javoblade (groupnumber) VALUES(?)");
        $stmt->bind_param("i",$lk);
        $stmt->execute();
        $stmt =$this->con->prepare("INSERT IGNORE INTO  oxirgizapis (GroupNumber) VALUES(?)");
        $stmt->bind_param("i",$lk);
        $stmt->execute();
        $stmt =$this->con->prepare("INSERT IGNORE INTO  timede (GroupNumber) VALUES(?)");
        $stmt->bind_param("i",$lk);
        $stmt->execute();
        $stmt =$this->con->prepare("INSERT IGNORE INTO  timede2 (GroupNumber) VALUES(?)");
        $stmt->bind_param("i",$lk);
        $stmt->execute();*/
    }
    function GetOxirgiZapisplar($GroupNumber ,$OxirgiZapis){

        $path="../json/".$GroupNumber.".json";
        $int=(int)substr($OxirgiZapis,strlen($OxirgiZapis)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        //  $json_a["name"]="Bosqa".$i.$json_a["age"][1].$json_a["city"][0]["1"][1];
        $GroupNumber=$json_a["OxirgiZapislar"][$int];

    /*    $stmt2=$this->con->prepare("SELECT $OxirgiZapis FROM oxirgizapis WHERE GroupNumber=?");
        $stmt2->bind_param("i",$GroupNumber);
        $stmt2->execute();
        $stmt2->bind_result($GroupNumber);
        $stmt2->fetch();*/
        return $GroupNumber;
    }
    function SetOxirgiZapislar($data,$GroupNumber,$OxirgiZapis){

        $path="../json/".$GroupNumber.".json";
        $int=(int)substr($OxirgiZapis,strlen($OxirgiZapis)-1,1);
        $int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["OxirgiZapislar"][$int]=$data;

        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);
        /*
        $stmt =$this->con->prepare("UPDATE oxirgizapis SET $OxirgiZapis = ? WHERE GroupNumber =?");
        $stmt->bind_param("si",$data,$GroupNumber);
        $stmt->execute();*/
    }
    function Getkimmiyurishi($GroupNumber ){
        $path="../json/".$GroupNumber.".json";
        //$int=(int)substr($Javoblade,strlen($Javoblade)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        //  $json_a["name"]="Bosqa".$i.$json_a["age"][1].$json_a["city"][0]["1"][1];
        $GroupNumber=$json_a["kimmiyurishi"];
     /*
        $stmt2=$this->con->prepare("SELECT kimmiyurishi FROM timede2 WHERE groupnumber=?");
        $stmt2->bind_param("i",$GroupNumber);
        $stmt2->execute();
        $stmt2->bind_result($GroupNumber);
        $stmt2->fetch();*/
        return $GroupNumber;
    }
    function Setkimmiyurishi($kimmiyurishi,$GroupNumber){

        $path="../json/".$GroupNumber.".json";
        //$int=(int)substr($nmaligi,strlen($nmaligi)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["kimmiyurishi"]=$kimmiyurishi;

        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);/*
        $stmt =$this->con->prepare("UPDATE timede2 SET kimmiyurishi = ? WHERE groupnumber =?");
        $stmt->bind_param("si",$kimmiyurishi,$GroupNumber);
        $stmt->execute();*/
    }
    function SetPlayers($GroupNumber,$Level,$Id,$ki,$re){
        $stmt =$this->con->prepare("UPDATE players SET Indexq = ?,groupnamer = ?,Levelde = ?,Tikilgan='0',ContactName = ? WHERE id =?");
        $stmt->bind_param("iisss",$re,$GroupNumber,$Level,$ki,$Id);
        $stmt->execute();
    }
    function SetTimede($GroupNumber,$timede,$time){

        $path="../json/".$GroupNumber.".json";
        $int=(int)substr($timede,strlen($timede)-1,1);
        $int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["timede"][$int]=$time;

        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);
     /*
        $stmt =$this->con->prepare("UPDATE timede SET $timede = ? WHERE GroupNumber =?");
        $stmt->bind_param("si",$time,$GroupNumber);
        $stmt->execute();*/
    }
 /*  function SetOcheredBot($GroupNumber,$botId,$indexPlayer){
        $stmt =$this->con->prepare("INSERT INTO  ocheredbot(groupnumber,botId,indexPlayer ) VALUES (?,?,?) ");
        $stmt->bind_param("iis",$GroupNumber,$botId,$indexPlayer);
        $stmt->execute();
        return $stmt->insert_id;
    }
    function DeleteOcheredBot($botId,$id){
            $sql="DELETE FROM ocheredbot WHERE botId = ? AND id=? ";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param("ii", $botId,$id);
            $stmt->execute();
    }
    function GetOcheredBot($BotId){
        $stmt2=$this->con->prepare("SELECT indexPlayer ,id FROM ocheredbot WHERE  botId=?");
        $stmt2->bind_param("i",$BotId);
        $stmt2->execute();
        $stmt2->bind_result($ki1,$id);
        $kii2=array();
        $r=0;
        while($stmt2->fetch()){
            $kii2[0][$r]=$ki1;
            $kii2[1][$r]=$id;
                $r++;
        }
        return $kii2;
    }*/
    function GetTimede($GroupNumber,$timede){
        $path="../json/".$GroupNumber.".json";
        $int=(int)substr($timede,strlen($timede)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        //  $json_a["name"]="Bosqa".$i.$json_a["age"][1].$json_a["city"][0]["1"][1];
        $GroupNumber=$json_a["timede"][$int];
        /*
        $stmt2=$this->con->prepare("SELECT $timede FROM timede WHERE GroupNumber=?");
        $stmt2->bind_param("i",$GroupNumber);
        $stmt2->execute();
        $stmt2->bind_result($ki1);
        $stmt2->fetch();*/
        return $GroupNumber;
    }
    function GetTimede2($GroupNumber,$timede){
        $path="../json/".$GroupNumber.".json";
        $int=(int)substr($timede,strlen($timede)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        //  $json_a["name"]="Bosqa".$i.$json_a["age"][1].$json_a["city"][0]["1"][1];
        $GroupNumber=$json_a["timede2"][$int];
        /*
        $stmt2=$this->con->prepare("SELECT $timede FROM timede WHERE GroupNumber=?");
        $stmt2->bind_param("i",$GroupNumber);
        $stmt2->execute();
        $stmt2->bind_result($ki1);
        $stmt2->fetch();*/
        return $GroupNumber;/*
        $stmt2=$this->con->prepare("SELECT $timede FROM timede2 WHERE GroupNumber=?");
        $stmt2->bind_param("i",$GroupNumber);
        $stmt2->execute();
        $stmt2->bind_result($ki1);
        $stmt2->fetch();
        return $ki1;*/
    }
    function SetTimede2($GroupNumber,$timede2,$time){
        $path="../json/".$GroupNumber.".json";
        $int=(int)substr($timede2,strlen($timede2)-1,1);
        $int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["timede2"][$int]=$time;

        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);
    /*
        $stmt =$this->con->prepare("UPDATE timede2 SET $timede2 = ? WHERE GroupNumber =?");
        $stmt->bind_param("si",$time,$GroupNumber);
        $stmt->execute();*/
    }
    function getOchered($userGrop)
    {

        $path="../json/".$userGrop.".json";
        //$int=(int)substr($timede,strlen($timede)-1,1);
        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        //  $json_a["name"]="Bosqa".$i.$json_a["age"][1].$json_a["city"][0]["1"][1];
        $userGrop=$json_a["ochered"];$oche=array();
        for($i=0; $i<sizeof($userGrop);$i=$i+2){
            $oche[$i/2]=$userGrop[$i].$userGrop[$i+1];
        }
/*
        $stmt = $this->con->prepare("SELECT idPlayer,timed FROM ochered WHERE groupnumber = ? ");
        $stmt->bind_param("i", $userGrop);
        $stmt->execute();
        $stmt->bind_result($ochered,$timed);
        $m=0;
        while($stmt->fetch()){
            $oche[$m]=$ochered.$timed;
            $m++;
        }*/
        return $oche;
    }
    function SetOchered($userId,$userGrop,$timed){
        $path="../json/".$userGrop.".json";
        //$int=(int)substr($userGrop,strlen($userGrop)-1,1);
        //$int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
       // $json_a["ochered"][$int]=$time;
        array_push($json_a["ochered"], $userId);
        array_push($json_a["ochered"], $timed);

        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);
   /*
        $stmt =$this->con->prepare("INSERT INTO  ochered(groupnumber, idPlayer,timed) VALUES (?,?,?) ");
        $stmt->bind_param("iss",$userGrop,$userId,$timed);
        $stmt->execute();*/
    }
    function DeleteOchered($userGrop,$id){

        $path="../json/".$userGrop.".json";
        //$int=(int)substr($userGrop,strlen($userGrop)-1,1);
        //$int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        // $json_a["ochered"][$int]=$time;
        //array_push($json_a["ochered"], $userId);
       // array_push($json_a["ochered"], $timed);
       // $userGrop=$json_a["ochered"];
        for($i=0; $i<sizeof($json_a["ochered"]);$i=$i+2){
            if($json_a["ochered"][$i]==$id){
                array_splice($json_a["ochered"], $i, 2);

            break;
            }
        }
        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);

/*
        $sql="DELETE FROM ochered WHERE groupnumber = ? AND idPlayer=? ";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("is", $userGrop,$id);
        $stmt->execute();*/
    }
    function combinatsiya()
    {
        $g=array();
        $n=array();
        for ($i = 0; $i < 18; $i++)
        {
            $g[$i] = rand(11, 62);
        }
        for ($iop = 0; $iop < 5; $iop++)
        {
            $n[$iop] = rand(11, 62);
        }
        try
        {
            for ($t1 = 1; $t1 < 18; $t1++)
            {
                if ($t1 == 1)
                {
                    while ($g[1] == $g[0] ||
                        $g[1] == $g[2] || $g[1] == $g[3] ||
                        $g[1] == $g[4] || $g[1] == $g[5] ||
                        $g[1] == $g[6] || $g[1] == $g[7] ||
                        $g[1] == $g[8] || $g[1] == $g[9] ||
                        $g[1] == $g[10] || $g[1] == $g[11] ||
                        $g[1] == $g[12] || $g[1] == $g[13] ||
                        $g[1] == $g[14] || $g[1] == $g[15] ||
                        $g[1] == $g[16] || $g[1] == $g[17])
                    {
                        $g[$t1] = rand(11, 62);
                    }
                }
                if ($t1 == 2)
                {
                    while ($g[2] == $g[0] ||
                        $g[2] == $g[1] || $g[2] == $g[3] ||
                        $g[2] == $g[4] || $g[2] == $g[5] ||
                        $g[2] == $g[6] || $g[2] == $g[7] ||
                        $g[2] == $g[8] || $g[2] == $g[9] ||
                        $g[2] == $g[10] || $g[2] == $g[11] ||
                        $g[2] == $g[12] || $g[2] == $g[13] ||
                        $g[2] == $g[14] || $g[2] == $g[15] ||
                        $g[2] == $g[16] || $g[2] == $g[17])
                    {
                        $g[$t1] = rand(11, 62);
                    }
                }
                if ($t1 == 3)
                {
                    while ($g[3] == $g[0] ||
                        $g[3] == $g[1] || $g[3] == $g[2] ||
                        $g[3] == $g[4] || $g[3] == $g[5] ||
                        $g[3] == $g[6] || $g[3] == $g[7] ||
                        $g[3] == $g[8] || $g[3] == $g[9] ||
                        $g[3] == $g[10] || $g[3] == $g[11] ||
                        $g[3] == $g[12] || $g[3] == $g[13] ||
                        $g[3] == $g[14] || $g[3] == $g[15] ||
                        $g[3] == $g[16] || $g[3] == $g[17])
                    {
                        $g[$t1] = rand(11, 62);
                    }
                }
                if ($t1 == 4)
                {
                    while ($g[4] == $g[0] ||
                        $g[4] == $g[1] || $g[4] == $g[3] ||
                        $g[4] == $g[2] || $g[4] == $g[5] ||
                        $g[4] == $g[6] || $g[4] == $g[7] ||
                        $g[4] == $g[8] || $g[4] == $g[9] ||
                        $g[4] == $g[10] || $g[4] == $g[11] ||
                        $g[4] == $g[12] || $g[4] == $g[13] ||
                        $g[4] == $g[14] || $g[4] == $g[15] ||
                        $g[4] == $g[16] || $g[4] == $g[17])
                    {
                        $g[$t1] = rand(11, 62);
                    }
                }
                if ($t1 == 5)
                {
                    while ($g[5] == $g[0] ||
                        $g[5] == $g[1] || $g[5] == $g[3] ||
                        $g[5] == $g[4] || $g[5] == $g[2] ||
                        $g[5] == $g[6] || $g[5] == $g[7] ||
                        $g[5] == $g[8] || $g[5] == $g[9] ||
                        $g[5] == $g[10] || $g[5] == $g[11] ||
                        $g[5] == $g[12] || $g[5] == $g[13] ||
                        $g[5] == $g[14] || $g[5] == $g[15] ||
                        $g[5] == $g[16] || $g[5] == $g[17])
                    {
                        $g[$t1] = rand(11, 62);
                    }
                }
                if ($t1 == 6)
                {
                    while ($g[6] == $g[0] ||
                        $g[6] == $g[1] || $g[6] == $g[3] ||
                        $g[6] == $g[4] || $g[6] == $g[5] ||
                        $g[6] == $g[2] || $g[6] == $g[7] ||
                        $g[6] == $g[8] || $g[6] == $g[9] ||
                        $g[6] == $g[10] || $g[6] == $g[11] ||
                        $g[6] == $g[12] || $g[6] == $g[13] ||
                        $g[6] == $g[14] || $g[6] == $g[15] ||
                        $g[6] == $g[16] || $g[6] == $g[17])
                    {
                        $g[$t1] = rand(11, 62);
                    }
                }
                if ($t1 == 7)
                {
                    while ($g[7] == $g[0] ||
                        $g[7] == $g[1] || $g[7] == $g[3] ||
                        $g[7] == $g[4] || $g[7] == $g[5] ||
                        $g[7] == $g[6] || $g[7] == $g[2] ||
                        $g[7] == $g[8] || $g[7] == $g[9] ||
                        $g[7] == $g[10] || $g[7] == $g[11] ||
                        $g[7] == $g[12] || $g[7] == $g[13] ||
                        $g[7] == $g[14] || $g[7] == $g[15] ||
                        $g[7] == $g[16] || $g[7] == $g[17])
                    {
                        $g[$t1] = rand(11, 62);
                    }
                }
                if ($t1 == 8)
                {
                    while ($g[8] == $g[0] ||
                        $g[8] == $g[1] || $g[8] == $g[3] ||
                        $g[8] == $g[4] || $g[8] == $g[5] ||
                        $g[8] == $g[6] || $g[8] == $g[2] ||
                        $g[8] == $g[7] || $g[8] == $g[9] ||
                        $g[8] == $g[10] ||$g[8] == $g[11] ||
                        $g[8] == $g[12] || $g[8] == $g[13] ||
                        $g[8] == $g[14] || $g[8] == $g[15] ||
                        $g[8] == $g[16] || $g[8] == $g[17])
                    {
                        $g[$t1] = rand(11, 62);
                    }
                }
                if ($t1 == 9)
                {
                    while ($g[9] == $g[0] ||
                        $g[9] == $g[1] || $g[9] == $g[3] ||
                        $g[9] == $g[4] || $g[9] == $g[5] ||
                        $g[9] == $g[6] || $g[9] == $g[2] ||
                        $g[9] == $g[8] || $g[9] == $g[7] ||
                        $g[9] == $g[10] || $g[9] == $g[11] ||
                        $g[9] == $g[12] || $g[9] == $g[13] ||
                        $g[9] == $g[14] || $g[9] == $g[15] ||
                        $g[9] == $g[16] || $g[9] == $g[17])
                    {
                        $g[$t1] = rand(11, 62);
                    }
                }
                if ($t1 == 10)
                {
                    while ($g[10] == $g[0] ||
                        $g[10] == $g[1] || $g[10] == $g[3] ||
                        $g[10] == $g[4] || $g[10] == $g[5] ||
                        $g[10] == $g[6] || $g[10] == $g[2] ||
                        $g[10] == $g[8] || $g[10] == $g[7] ||
                        $g[10] == $g[9] || $g[10] == $g[11] ||
                        $g[10] == $g[12] || $g[10] == $g[13] ||
                        $g[10] == $g[14] || $g[10] == $g[15] ||
                        $g[10] == $g[16] || $g[10] == $g[17])
                    {
                        $g[$t1] = rand(11, 62);
                    }
                }
                if ($t1 == 11)
                {
                    while ($g[11] == $g[0] ||
                        $g[11] == $g[1] || $g[11] == $g[3] ||
                        $g[11] == $g[4] || $g[11] == $g[5] ||
                        $g[11] == $g[6] || $g[11] == $g[2] ||
                        $g[11] == $g[8] || $g[11] == $g[7] ||
                        $g[11] == $g[9] || $g[11] == $g[10] ||
                        $g[11] == $g[12] || $g[11] == $g[13] ||
                        $g[11] == $g[14] || $g[11] == $g[15] ||
                        $g[11] == $g[16] || $g[11] == $g[17])
                    {
                        $g[$t1] = rand(11, 62);
                    }
                }
                if ($t1 == 12)
                {
                    while ($g[12] == $g[0] ||
                        $g[12] == $g[1] || $g[12] == $g[3] ||
                        $g[12] == $g[4] || $g[12] == $g[5] ||
                        $g[12] == $g[6] || $g[12] == $g[2] ||
                        $g[12] == $g[8] || $g[12] == $g[7] ||
                        $g[12] == $g[9] || $g[12] == $g[10] ||
                        $g[12] == $g[11] || $g[12] == $g[13] ||
                        $g[12] == $g[14] || $g[12] == $g[15] ||
                        $g[12] == $g[16] || $g[12] == $g[17])
                    {
                        $g[$t1] = rand(11, 62);
                    }
                }
                if ($t1 == 13)
                {
                    while ($g[13] == $g[0] ||
                        $g[13] == $g[1] || $g[13] == $g[3] ||
                        $g[13] == $g[4] || $g[13] == $g[5] ||
                        $g[13] == $g[6] || $g[13] == $g[2] ||
                        $g[13] == $g[8] || $g[13] == $g[7] ||
                        $g[13] == $g[9] || $g[13] == $g[10] ||
                        $g[13] == $g[11] || $g[13] == $g[12] ||
                        $g[13] == $g[14] || $g[13] == $g[15] ||
                        $g[13] == $g[16] || $g[13] == $g[17])
                    {
                        $g[$t1] = rand(11, 62);
                    }
                }
                if ($t1 == 14)
                {
                    while ($g[14] == $g[0] ||
                        $g[14] == $g[1] || $g[14] == $g[3] ||
                        $g[14] == $g[4] || $g[14] == $g[5] ||
                        $g[14] == $g[6] || $g[14] == $g[2] ||
                        $g[14] == $g[8] || $g[14] == $g[7] ||
                        $g[14] == $g[9] || $g[14] == $g[10] ||
                        $g[14] == $g[11] || $g[14] == $g[12] ||
                        $g[14] == $g[13] || $g[14] == $g[15] ||
                        $g[14] == $g[16] || $g[14] == $g[17])
                    {
                        $g[$t1] = rand(11, 62);
                    }
                }
                if ($t1 == 15)
                {
                    while ($g[15] == $g[0] ||
                        $g[15] == $g[1] || $g[15] == $g[3] ||
                        $g[15] == $g[4] || $g[15] == $g[5] ||
                        $g[15] == $g[6] || $g[15] == $g[2] ||
                        $g[15] == $g[8] || $g[15] == $g[7] ||
                        $g[15] == $g[9] || $g[15] == $g[10] ||
                        $g[15] == $g[11] || $g[15] == $g[12] ||
                        $g[15] == $g[13] || $g[15] == $g[14] ||
                        $g[15] == $g[16] || $g[15] == $g[17])
                    {
                        $g[$t1] = rand(11, 62);
                    }
                }
                if ($t1 == 16)
                {
                    while ($g[16] == $g[0] ||
                        $g[16] == $g[1] || $g[16] == $g[3] ||
                        $g[16] == $g[4] || $g[16] == $g[5] ||
                        $g[16] == $g[6] || $g[16] == $g[2] ||
                        $g[16] == $g[8] || $g[16] == $g[7] ||
                        $g[16] == $g[9] || $g[16] == $g[10] ||
                        $g[16] == $g[11] || $g[16] == $g[12] ||
                        $g[16] == $g[13] || $g[16] == $g[15] ||
                        $g[16] == $g[14] || $g[16] == $g[17])
                    {
                        $g[$t1] = rand(11, 62);
                    }
                }
                if ($t1 == 17)
                {
                    while ($g[17] == $g[0] ||
                        $g[17] == $g[1] || $g[17] == $g[3] ||
                        $g[17] == $g[4] || $g[17] == $g[5] ||
                        $g[17] == $g[6] || $g[17] == $g[2] ||
                        $g[17] == $g[8] || $g[17] == $g[7] ||
                        $g[17] == $g[9] || $g[17] == $g[10] ||
                        $g[17] == $g[11] || $g[17] == $g[12] ||
                        $g[17] == $g[13] || $g[17] == $g[15] ||
                        $g[17] == $g[14] || $g[17] == $g[16])
                    {
                        $g[$t1] = rand(11, 62);
                    }
                }
            }
            for ($yu = 0; $yu < 5; $yu++)
            {
                if ($yu == 0)
                {
                    while ($n[$yu] == $g[0] || $n[$yu] == $g[7] ||
                        $n[$yu] == $g[1] || $n[$yu] == $g[3] ||
                        $n[$yu] == $g[4] || $n[$yu] == $g[5] ||
                        $n[$yu] == $g[6] || $n[$yu] == $g[2] ||
                        $n[$yu] == $g[8] || $n[$yu] == $g[9] ||
                        $n[$yu] == $g[10] || $n[$yu] == $g[11] ||
                        $n[$yu] == $g[12] || $n[$yu] == $g[13] ||
                        $n[$yu] == $g[14] || $n[$yu] == $g[15] ||
                        $n[$yu] == $g[16] || $n[$yu] == $g[17] ||
                        $n[$yu] == $n[1] || $n[$yu] == $n[2] ||
                        $n[$yu] == $n[3] || $n[$yu] == $n[4])
                    {
                        $n[$yu] = rand(11, 62);
                    }
                }
                if ($yu == 1)
                {
                    while ($n[$yu] == $g[0] || $n[$yu] == $g[7] ||
                        $n[$yu] == $g[1] || $n[$yu] == $g[3] ||
                        $n[$yu] == $g[4] || $n[$yu] == $g[5] ||
                        $n[$yu] == $g[6] || $n[$yu] == $g[2] ||
                        $n[$yu] == $g[8] || $n[$yu] == $g[9] ||
                        $n[$yu] == $g[10] || $n[$yu] == $g[11] ||
                        $n[$yu] == $g[12] || $n[$yu] == $g[13] ||
                        $n[$yu] == $g[14] || $n[$yu] == $g[15] ||
                        $n[$yu] == $g[16] || $n[$yu] == $g[17] ||
                        $n[$yu] == $n[0] || $n[$yu] == $n[2] ||
                        $n[$yu] == $n[3] || $n[$yu] == $n[4])
                    {
                        $n[$yu] = rand(11, 62);
                    }
                }
                if ($yu == 2)
                {
                    while ($n[$yu] == $g[0] || $n[$yu] == $g[7] ||
                        $n[$yu] == $g[1] || $n[$yu] == $g[3] ||
                        $n[$yu] == $g[4] || $n[$yu] == $g[5] ||
                        $n[$yu] == $g[6] || $n[$yu] == $g[2] ||
                        $n[$yu] == $g[8] || $n[$yu] == $g[9] ||
                        $n[$yu] == $g[10] || $n[$yu] == $g[11] ||
                        $n[$yu] == $g[12] || $n[$yu] == $g[13] ||
                        $n[$yu] == $g[14] || $n[$yu] == $g[15] ||
                        $n[$yu] == $g[16] || $n[$yu] == $g[17] ||
                        $n[$yu] == $n[0] || $n[$yu] == $n[1] ||
                        $n[$yu] == $n[3] || $n[$yu] == $n[4])
                    {
                        $n[$yu] = rand(11, 62);
                    }
                }
                if ($yu == 3)
                {
                    while ($n[$yu] == $g[0] || $n[$yu] == $g[7] ||
                        $n[$yu] == $g[1] || $n[$yu] == $g[3] ||
                        $n[$yu] == $g[4] || $n[$yu] == $g[5] ||
                        $n[$yu] == $g[6] || $n[$yu] == $g[2] ||
                        $n[$yu] == $g[8] || $n[$yu] == $g[9] ||
                        $n[$yu] == $g[10] || $n[$yu] == $g[11] ||
                        $n[$yu] == $g[12] || $n[$yu] == $g[13] ||
                        $n[$yu] == $g[14] || $n[$yu] == $g[15] ||
                        $n[$yu] == $g[16] || $n[$yu] == $g[17] ||
                        $n[$yu] == $n[0] || $n[$yu] == $n[2] ||
                        $n[$yu] == $n[1] || $n[$yu] == $n[4])
                    {
                        $n[$yu] = rand(11, 62);
                    }
                }
                if ($yu == 4)
                {
                    while ($n[$yu] == $g[0] || $n[$yu] == $g[7] ||
                        $n[$yu] == $g[1] || $n[$yu] == $g[3] ||
                        $n[$yu] == $g[4] || $n[$yu] == $g[5] ||
                        $n[$yu] == $g[6] || $n[$yu] == $g[2] ||
                        $n[$yu] == $g[8] || $n[$yu] == $g[9] ||
                        $n[$yu] == $g[10] || $n[$yu] == $g[11] ||
                        $n[$yu] == $g[12] || $n[$yu] == $g[13] ||
                        $n[$yu] == $g[14] || $n[$yu] == $g[15] ||
                        $n[$yu] == $g[16] || $n[$yu] == $g[17] ||
                        $n[$yu] == $n[0] || $n[$yu] == $n[2] ||
                        $n[$yu] == $n[1] || $n[$yu] == $n[3])
                    {
                        $n[$yu] = rand(11, 62);
                    }
                }
            }
            //flesh test
            //  g[1] = 12; g[0] = 13; n[0] = 14; n[1] = 15; n[2] = 50; n[3] = 56; n[4] = 17;
            //  g[2] = 12; g[3] = 13;
            //Strit
            //    g[2] = 33; g[3] = 35;
            //n[0] = 18;n[1] = 16;n[2] = 49;n[3] = 45;n[4] = 47;
            // g[1] = 26; g[0] = 17;
            //para
            //  g[2] = 23; g[3] = 36; n[0] =26; n[1] = 17; n[2] = 48; n[3] = 35; n[4] = 51;
            //   g[0] = 23; g[1] = 36;
            //g[4] = 23; g[5] = 36;
            //kikerets;
            //  g[0] = 11; g[1] = 12; n[0] =31; n[1] = 56; n[2] = 48; n[3] = 35; n[4] = 57;
            // g[2] = 13; g[3] = 14;
            //set
            // g[1] = 32; g[0] = 37; n[0] =25; n[1] = 43; n[2] = 11; n[3] = 24; n[4] = 58;
            // g[2] = 45; g[3] = 50;
        }
        catch (Exception $e)
        {
            print($e->getMessage());
        }
        $as=array($g,$n);
        return $as;
    }
    function cardio()
    {
        $cards=array();
        for($i = 11; $i < 24; $i++)
        {
            $cards[$i] = "cl".$i;
        }
        for ($i = 24; $i < 37; $i++)
        {
            $cards[$i] = "di".($i-13);
        }
        for ($i = 37; $i < 50; $i++)
        {
            $cards[$i] = "he".($i - 26);
        }
        for ($i = 50; $i < 63; $i++)
        {
            $cards[$i] = "sp".($i - 39);
        }
        return $cards;
    }
    function TurnLk($lk)
    {
        $m = 0;
        $kllar=array(10,50,200,1000,4000,20000,100000,500000,1000000,2000000,
            10000000,200000000,500000000,1000000000,500000,1000000,2000000,10000000,
            200000000,500000000,1000000000,20,20,20,20,20,20,20,20,20,20,20);
        //lobbi
        for($i=0;$i<32;$i++){
            if($lk>$i*100){
                $m = $kllar[$i];
            }
        }
        return $m;
    }
    function Pas($lk,$i){
        $db=new DbOperation();
        //$i=1 6 , $i=0 0
        if($i==1){  sleep(6);}else{sleep(1);}
        $minSatck = $db->TurnLk($lk);

        $db->SetKartatarqatildi("false",$lk);
        $db->SetError("Uttide3",$lk);
        $db->YurishAsosiy($lk,$minSatck,2);
    }
    //Method to create a new user
    //YurishAsosiy
    function YurishAsosiy($lk,$minSatck,$soni){
        $koo=$lk;
        $db=new DbOperation();
        $koo=$db->GetKartatarqatildi($koo);
        if($koo== "false")
        {
            $dssad = 0;
            $ttt4 = "";
            $uyinchilar=$db->Getuyinchilar($lk);
            for ($i=0;$i<strlen($uyinchilar);$i++){
                $jie="OxirgiZapis".substr($uyinchilar,$i,1);
                if((int)substr($db->GetOxirgiZapisplar($lk,$jie),14,12)+(int)substr($db->GetOxirgiZapisplar($lk,$jie),27,12)>=$minSatck &&
                    strpos($uyinchilar,substr($uyinchilar,$i,1))!== false  ){
                    $dssad = $dssad + 1;
                    $ttt4 = $ttt4.substr($uyinchilar,$i,1);
                }
            }
            $ttt5 = "";
            for($i=0;$i<9;$i++){
                if(strpos($uyinchilar,(string)($i+1))!==false&&
                    strpos($ttt4,(string)($i+1))!==false){
                    $ttt5=$ttt5.(string)($i+1);
                }
            }
            $db->SetYurishKimmiki($ttt5,$lk);
            $db->SetHuy($dssad,$lk);
            $koo=$lk;
            $koo=$db->GetKimboshlashi($koo);
            $koo2=$ttt5;
            for ($i = 1; $i < 10; $i++)
            {
                $gd = (int)$koo + $i;
                if ($gd > 9)
                {
                    $gd = $gd - 9;
                }
                if (strpos($koo2, (string)$gd) !== false)
                {
                    $koo2=(string)$gd.(string)$koo2;
                    $db->SetKimboshlashi($gd,$lk);
                    break;
                }
            }
            $db->SetYurishKimmiki($koo2,$lk);
            $yurishkimmiki=$koo2;

            if ($dssad >= $soni && $db->GetKartatarqatildi($lk) == "false")
            {
                for($i=1;$i<10;$i++){
                    $db->SetTikilganPullar("Tikilganpullar".(string)$i,"0",$lk);
                }
                $n=$db->combinatsiya();
                $cards=$db->cardio();
                //Gruppalaga ajratiganda
                $db->SetXAmmakartalar($cards[$n[1][0]].$cards[$n[1][1]].$cards[$n[1][2]].$cards[$n[1][3]].$cards[$n[1][4]],$lk);
                // if (trt != -1) { ChiqaribYuborish[trt].Timer.Start(); }
                for ($i = 0; $i < 9; $i++)
                {
                    $db->SetUyinchilar(substr($uyinchilar,1,1).substr($uyinchilar,2,strlen($uyinchilar)-2).substr($uyinchilar,0,1),$lk);
                    $uyinchilar=substr($uyinchilar,1,1).substr($uyinchilar,2,strlen($uyinchilar-2)).substr($uyinchilar,0,1);
                    if(strpos($yurishkimmiki, substr($uyinchilar,1,1))!== false&& strpos($yurishkimmiki, substr($uyinchilar,0,1))!== false)
                    {
                        break;
                    }
                }

                $totti = strlen($yurishkimmiki)-1;
                $db->SetHuy($totti,$lk);
                $db->SetTimede2($lk,"time".substr($yurishkimmiki,0,1),(string)time());
                $db->Setkimmiyurishi(substr($yurishkimmiki,0,1)."true",$lk);

                $db->SetKartatarqatildi("true",$lk);



                for($m = 0; $m < $totti; $m++)
                {
                    $message=$cards[$n[0][$m * 2]].$cards[$n[0][$m * 2 + 1]].substr($yurishkimmiki,0,1).
                        str_pad((string)($minSatck / 2),12,'0',STR_PAD_LEFT)."!". str_pad((string)($minSatck ),12,'0',STR_PAD_LEFT).
                        $uyinchilar .substr($yurishkimmiki,$m+1,1) .str_pad((string)($lk),4,'0',STR_PAD_LEFT);
                    $db->SEndMEssage($lk,substr($yurishkimmiki,$m+1,1),$message);
                }
            }
        }
    }
    function registerUser($data)
    {
        $BotOrClient = "true";
        $Id = "";  $Money = 0;$ki=0;
        $ImageNumber=12;
        if(strlen($data) > 2 && substr($data,0, 3) == "%??" && strlen($data) >= 35)
        {
            $Id = substr($data,3, 10);
            $ki=(int)$Id;
            $Money = substr($data,21, 12);
            $ImageNumber = substr($data,33, 2);
            if(strlen($data)>40&&substr($data,35, 1) == "f")
            {
                $BotOrClient = "false";
            }
        }
        if ($Id == "0000000000")
        {
                $stmt =$this->con->prepare("INSERT INTO players (Imagenumber,money) VALUES(?,?)");
                $stmt->bind_param("si",$ImageNumber,$Money);
                $stmt->execute();
                $ki=$stmt->insert_id;
                $stmt->close();
        }
        if ($BotOrClient != "false")
        {
            return("Jiklo".str_pad($ki,10,"0",STR_PAD_LEFT));

        }else{
            if($BotOrClient == "false"){
                $sql="DELETE FROM players WHERE id = ?";
                $stmt = $this->con->prepare($sql);
                $stmt->bind_param("i", $ki);
                $stmt->execute();
                $stmt->close();

               // $db->OnIncomBot("Jiklo".str_pad($ki,10,"0",STR_PAD_LEFT),(int)$BotlistNumber);
            }
        }
        return true;
    }
    //Chekifonline
    function ChekIfOnline($userGrop,$BotOrClient){
        $db=new DbOperation();
        $GroupNumber=$userGrop;
        $uyinchilar=$db->Getuyinchilar($userGrop);

        for($i=0;$i<strlen($uyinchilar);$i++){
            $erw=$db->GetTimede($GroupNumber,"time".substr($uyinchilar,$i,1));
            $OxirgiZapis=$db->GetOxirgiZapisplar($userGrop,"OxirgiZapis".substr($uyinchilar,$i,1));
            $data21 = "Chiqishde" .substr($uyinchilar,$i,1).str_pad((string)($GroupNumber),4,'0',STR_PAD_LEFT);
            if(strpos($uyinchilar,substr($uyinchilar,$i,1))!==false && time()-(int)substr($erw,10,strlen($erw)-10)>7 && $BotOrClient=="true"){
               $db->SetError("Chiqish=".$data21,23423);
                $db->Chiqishde($data21,0);
            }else{
                if(strlen($OxirgiZapis)>68 && strpos($uyinchilar,substr($uyinchilar,$i,1))!==false&& strlen($erw)<10 ){
                    $db->SetError("Chiqish2=".$data21,23423);
                    $db->Chiqishde($data21,0);
                }else{
                    if(strlen($OxirgiZapis)>68 && strpos($uyinchilar,substr($uyinchilar,$i,1))!==false && strlen($erw)>10 &&
                        time()-(int)substr($erw,10,strlen($erw)-10)<7 && $db->GetKartatarqatildi($GroupNumber)=="false" ){
                        $minStavka = $db->TurnLk($GroupNumber);
                        if((int)substr($OxirgiZapis,14, 12) < $minStavka)
                        {               $db->SetError("Chiqish4=".$data21,23423);

                            $db->Chiqishde($data21,0);
                        }
                    }else{
                        if(strpos($uyinchilar,substr($uyinchilar,$i,1))!==false &&(strlen($OxirgiZapis)<68 || strlen($erw)<10)){
                            $db->SetError("Chiqish5=".$data21,23423);

                            $db->Chiqishde($data21,0);
                        }
                    }
                }
            }
        }
      /**  $uyinchilar=$db->Getuyinchilar($userGrop);
        $stmt = $this->con->prepare("SELECT indexs,id FROM botgrouplar WHERE groupnumber = ? ");
        $stmt->bind_param("i", $userGrop);
        $stmt->execute();
        $stmt->bind_result($index ,$lkk);
        $jk=array();$d=0;

        while($stmt->fetch()){
            if(strlen((string)$index)>0 && strpos($uyinchilar,(string)$index)===false && $BotOrClient=="true"){

                $jk[0][$d]=$lkk;
                $jk[1][$d]=$index;
                $d++;
            }
        }
        for($i=0;$i<$d;$i++){
            $db->SetError("sdfCCC",324);
            $sql="DELETE FROM botgrouplar WHERE groupnumber = ? AND indexs=? AND id=?   ";
            $stmt2 = $this->con->prepare($sql);
            $stmt2->bind_param("iii", $userGrop,$jk[1][$i],$jk[0][$i]);
            $stmt2->execute();
            $sql="DELETE FROM botlist WHERE groupnumber = ? AND indexq=? AND id=? ";
            $stmt3 = $this->con->prepare($sql);
            $stmt3->bind_param("iii", $userGrop,$jk[1][$i],$jk[0][$i]);
            $stmt3->execute();
            $sql="DELETE FROM ocheredbot WHERE groupnumber = ?  AND botId=? ";
            $stmt3 = $this->con->prepare($sql);
            $stmt3->bind_param("ii", $userGrop,$jk[0][$i]);
            $stmt3->execute();
        }**/
    }
    //methoda uyinga kirish unchun
    function UyingaKirish($data){
        function uyinchilarade2($son,$nechtaligi)
        {
            $ui="";$indexlar=array("1","3","5","7","9","2","4","6","8");
            $db=new DbOperation();
            $st=$db->Getuyinchilar($son);
            for($i=0;$i<$nechtaligi;$i++){
                if(strpos($st, $indexlar[$i]) === false){
                    $db->SetUyinchilar($st.$indexlar[$i],$son);$ui=$st.$indexlar[$i]; break;
                }
            }
            return $ui;
        }
        function PlayerdaKartaniTarqatish($data,$ass3,$lk,$index,$sonide,$uyinchilar)
        {
            $odamlade=array(5,9);

            $db=new DbOperation();
            $minSatck = $db->TurnLk($lk);
            $rtwq=str_replace((string)$index,"",$uyinchilar);
            $db->SetError("Usha=".$rtwq." uyinchilar=".$uyinchilar,$lk);
            $db->SEndMEssageToGroup($lk,$rtwq ,$data.$index.$ass3);
            if($sonide >= 2 && $lk <= 2100 )
            {
                $db->YurishAsosiy($lk, $minSatck, 2);
            }
            //Turnir
            if($lk > 2100)
            {   for($i=0;$i<2;$i++){
                if($lk%2==$i){
                    if($sonide==$odamlade[$i]){
                        $db->YurishAsosiy($lk, $minSatck, $odamlade[$i]);
                        $i=2;
                      }
                    }
                }
            }
            return $data.$index.$ass3 ;
        }
        function uyinchiniGruppgaQushish($PlayersNumber,$GroupNumber,$BotOrClient,$Id,$Level,$Money,$Name,$pul,$yol,$uyinchilar){
            $db=new DbOperation();
            $index=(int)substr($uyinchilar,strlen($uyinchilar)-1,1);
            $data = "%%".$Name .str_pad((string)$GroupNumber,4,"0",STR_PAD_LEFT).$pul."$" .$yol
                .$Level .$Money."xb".$Id;
            $db->DeleteMessages($index,$GroupNumber);
            $db->SetTimede($GroupNumber,"time".(string)$index,str_pad((string)$Id,10,"0",STR_PAD_LEFT).time());
            $db->SetOxirgiZapislar($data.$index,$GroupNumber,"OxirgiZapis".(string)$index);
            if ($BotOrClient != "false")
            {
                $db->SetPlayers($GroupNumber,$Level,$Id,"person".$PlayersNumber,$index);
            }
            $kil = "";
            for($i=0;$i<strlen($uyinchilar);$i++){
                $ty="OxirgiZapis".substr($uyinchilar,$i,1);
                $oxirgide=$db->GetOxirgiZapisplar($GroupNumber,$ty);
                if($oxirgide != "" && $index!=substr($uyinchilar,$i,1))
                { $kil = $kil.$oxirgide; }
            }
            // GruppadagiAktivOdamlarSoni[Maindata.GroupNumber] = GruppadagiAktivOdamlarSoni[Maindata.GroupNumber] + 1;
            return PlayerdaKartaniTarqatish($data, $kil, $GroupNumber,$index,$PlayersNumber,$uyinchilar);
        }
        $BotOrClient = "true";
        $GroupNumber = 0;
        $pul = "";  $Id = "";
        $Level = "";$Money = "";
        $yol = "";  $Name = "";
        //%%asdsasdad0001000000001000&000000000000000001000000001000$^0000000001
        if(strlen($data)>=69 && substr($data,0, 2) == "%%")
        {
            $GroupNumber = substr($data,10, 4);
            $Id = substr($data,59, 10);
            $Level = substr($data,39, 6);
            $Name = substr($data,2, 8);
            $Money = substr($data,45, 12);
            $yol = substr($data,27, 12);
            $pul = substr($data,14, 12);
            if (strlen($data) > 69 && substr($data,69, 1) == "f")
            {
                $BotOrClient = "false";
            }
        }
        $trwe=true;
        $db= new DbOperation();
        $rewrwr="Ushade";
        $odamlade=array(5,9);
        $Pullar=array(100,500,2000,10000,40000,200000,1000000,10000000,100000000,200000000,400000000,1000000000,2000000000);
        $Gruplar=array(0,100,200,300,400,500,600,700,800,900,1000,1100,1200);
        for($i=1;$i<10;$i++){
            $rt="OxirgiZapis".(string)$i;
            $te=$db->GetOxirgiZapisplar($GroupNumber,$rt);
            if($te!=""){
                if($Id==substr($te,59,10)){
                    $trwe=false;
                    break;
                }
            }
        }
        $Ifgruplar=array(3300,2100,2,0);
        $Ifgruplar2=array(1,0);
        if($trwe){
            for($k=0;$k<2;$k++){
                for($i=0;$i<4;$i=$i+2){
                    //botde21 %%0402000000040000$000000000000000000000000040000xb0000000598f 0 2 0 0 0
                    if($k*$GroupNumber<$Ifgruplar[$i]&&$GroupNumber>$k*$Ifgruplar[$i+1]&&$Ifgruplar2[$k]*$GroupNumber<2100&&$GroupNumber>$Ifgruplar2[$k]){
                        for($i1 = $i;$i1 < 100;$i1 = $i1 + 2){
                            if($GroupNumber%2==0){$i2=0;}else{$i2=1;}$t=0;

                                    for($m=0;$m<13;$m++){
                                        if((int)$pul==$Pullar[$m]){
                                            $t=$m;
                                            break;
                                        }
                                    }

                                    $grup=$k*($i1 +($Gruplar[$t]+$i2)*($i/2))+$GroupNumber-$k*($i/2);

                                    $db->Creategrop2help($grup,"true");
                                    $tr="false";
                                    for($l=0;$l<11;$l++){
                                        $ochered=$db->getOchered($grup);
                                        $rt="false";


                                        if(sizeof($ochered)>0){
                                            if(substr($ochered[0],0,10)==$Id){
                                               break;
                                            }else{
                                                if(time()-(int)substr($ochered[0],10,strlen($ochered[0])-10)>20){
                                                    $db->DeleteOchered($grup,substr($ochered[0],0,10));
                                                    $rt="true";
                                                }
                                            }
                                        }

                                        if($l==0){
                                            if(sizeof($ochered)>2){
                                                $i2=2;$tr="true";$t=33;
                                                break;
                                            }else{
                                                $db->setOchered($Id,$grup,(string)time());
                                            }
                                        }else{
                                            if($l!=1&&$rt=="false"){
                                                sleep(1);
                                            }
                                        }


                                        if($l==8){
                                            $i2=2;$t=33; $tr="true";
                                            break;
                                        }
                                    }

                                    if($tr=="false"){ $db->ChekIfOnline($grup,$BotOrClient);
                                        $playersNumber=$db->GetHowmanyPlayers($grup);

                                        if($db->Getgrop2help($grup)=="true"&&
                                            ($i/2)*(int)$pul==($i/2)*$Pullar[$t] && $playersNumber < $odamlade[$i2] )
                                        {
                                            $GroupNumber = $grup; // $t=33;$i2=2;
                                            $i1=100;$i=4;$k=2;

                                            for($i3=0;$i3<2;$i3++){
                                                if($GroupNumber%2==$i3){
                                                    $playersNumber=$playersNumber+1;
                                                    if($GroupNumber<3300 &&$GroupNumber>2100&&$playersNumber>=$odamlade[$i3]){
                                                        $db->Setgrop2help($GroupNumber,"false");
                                                    }
                                                    $db->SetHowmanyPlayers($playersNumber,$GroupNumber);
                                                    $uyinchilar =  uyinchilarade2($GroupNumber,$odamlade[$i3]);
                                                    $rewrwr=uyinchiniGruppgaQushish($playersNumber,$GroupNumber,$BotOrClient,$Id,$Level,$Money,$Name,$pul,$yol,$uyinchilar);
                                                    $i3=2;
                                                }
                                            }
                                        }
                                    }
                                    $db->DeleteOchered($grup,$Id);
                            }
                    }
                }
            }
        }
        return $rewrwr;
    }
    //messajji olish ucnde
    function getMessages($userindex,$userGrop)
    {
        $db= new DbOperation();
        $messages = array();

        $tr="false";
        for($l=0;$l<11;$l++){
            $ochered=$db->getOchered($userGrop);
            $rt="false";

            if(sizeof($ochered)>0){
                if(substr($ochered[0],0,10)==$userindex){
                    break;
                }else{
                    if(time()-(int)substr($ochered[0],10,strlen($ochered[0])-10)>20){
                        $db->DeleteOchered($userGrop,substr($ochered[0],0,10));
                        $rt="true";
                    }
                }
            }

            if($l==0){
                if(sizeof($ochered)>2){
                    $tr="true";
                    break;
                }else{
                    $db->setOchered($userindex,$userGrop,(string)time());
                }
            }else{
                if($l!=1&&$rt=="false"){
                    sleep(1);
                }
            }

            if($l==8){
                 $tr="true";
                break;
            }
        }

        if($tr){
            $mk="time".(string)$userindex;
            $erw=$db->GetTimede($userGrop,$mk);

            $db->SetTimede($userGrop,"time".(string)$userindex,substr($erw,0,10).time());

            /*   $stmt = $this->con->prepare("SELECT message,id FROM messages WHERE gropnumber = ? AND Indexq=?");
               $stmt->bind_param("ii", $userGrop,$userindex);
               $stmt->execute();
               $stmt->bind_result($data,$id);

               while($stmt->fetch()){
                   $temp = array();
                   $temp['data'] = $data;
                   $db=new DbOperation();
                   //   $db->SetError($data." Get message index=".$userindex." id=".$id,$userGrop);
                   array_push($messages, $temp);
                   $db->DeleteMessages($userindex,$userGrop,(int)$id);
               }*/

            $path="../json/".$userGrop.".json";
            //$int=(int)substr($Javoblade,strlen($Javoblade)-1,1);
            //read
            $string = file_get_contents($path);
            $json_a = json_decode($string, true);
            //  $json_a["name"]="Bosqa".$i.$json_a["age"][1].$json_a["city"][0]["1"][1];
            $arrayde=$json_a["messages"][$userindex];

            for($i=0;$i<sizeof($arrayde);$i++){
                $temp = array();
                $temp['data'] = $arrayde[$i];
                $db=new DbOperation();
                //   $db->SetError($data." Get message index=".$userindex." id=".$id,$userGrop);
                array_push($messages, $temp);
            }
            $db->DeleteMessages($userindex,$userGrop);

            $asd=$db->GetKartatarqatildi($userGrop);

            if($asd=="true"){
                $nmadr=$db->Getkimmiyurishi($userGrop);
                //    $db->SetError("asd ".$nmadr,$userGrop);
                if(strlen($nmadr)>4 && substr($nmadr,1,4)=="true"){
                    $index=substr($nmadr,0,1);

                    $timede2=$db->GetTimede2($userGrop,"time".$index);

                    if(time()-(int)$timede2>28 &&$timede2!=""){
                        $data21 = "Chiqishde".$index.str_pad((string)($userGrop),4,'0',STR_PAD_LEFT);
                        $db->SetError("DATA=Chiqish3=".$data21,23423);
                        $db->Chiqishde($data21,1);
                    }
                }
            }
        }

        $db->DeleteOchered($userGrop,$userindex);
        return $messages;
    }
    function getMessagesBot($userindex,$userGrop)
    {
        $messages="";
        $db= new DbOperation();
        $tr="false";
        for($l=0;$l<11;$l++){
            $ochered=$db->getOchered($userGrop);
            $rt="false";

            if(sizeof($ochered)>0){
                if(substr($ochered[0],0,10)==$userindex){
                    break;
                }else{
                    if(time()-(int)substr($ochered[0],10,strlen($ochered[0])-10)>20){
                        $db->DeleteOchered($userGrop,substr($ochered[0],0,10));
                        $rt="true";
                    }
                }
            }

            if($l==0){
                if(sizeof($ochered)>2){
                    $tr="true";
                    break;
                }else{
                    $db->setOchered($userindex,$userGrop,(string)time());
                }
            }else{
                if($l!=1&&$rt=="false"){
                    sleep(1);
                }
            }

            if($l==8){
                $tr="true";
                break;
            }
        }

        if($tr){
            $path="../json/".$userGrop.".json";
            //$int=(int)substr($Javoblade,strlen($Javoblade)-1,1);
            //read
            $string = file_get_contents($path);
            $json_a = json_decode($string, true);
            $arrayde=$json_a["bots"];

            for($i=0;$i<sizeof($arrayde);$i++){
                $userindex=$arrayde["bots"][$i]["indexq"];

                $mk="time".(string)$userindex;
                $erw=$db->GetTimede($userGrop,$mk);
                $messages = array();
                $db->SetTimede($userGrop,"time".(string)$userindex,substr($erw,0,10).time());



                //  $json_a["name"]="Bosqa".$i.$json_a["age"][1].$json_a["city"][0]["1"][1];
                $arrayde2=$json_a["messages"][$userindex];

                for($i2=0;$i2<sizeof($arrayde2);$i2++){

                    $db->OnIncomBot($arrayde2[$i2],$i,$userGrop);
                }
                $db->DeleteMessages($userindex,$userGrop);
            }
        }
        $db->DeleteOchered($userGrop,$userindex);
        //Check the bots hereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee

/*
        $stmqt = $this->con->prepare("SELECT indexs,idnumber FROM botgrouplar WHERE groupnumber = ?");
        $stmqt->bind_param("i", $userGrop);
        $stmqt->execute();
        $stmqt->bind_result($index,$idnumber);
        $id=(string)$userindex.str_pad((string)($userGrop),4,'0',STR_PAD_LEFT).(string)time();
        $l=0;

        while($stmqt->fetch()){

         //    $idOchered=$db->SetOcheredBot($userGrop,$idnumber,$id);
         //    $ocherde=$db->GetOcheredBot($idnumber);

            if($ocherde[1][0]==$idOchered && substr($ocherde[0][0],0,5)==substr($id,0,5)&& strpos($tr,(string)$index)===false){

              $mk="time".(string)$index;
              $tr=$tr.(string)$index;
              $tr2[$l]=$idnumber;
              $tr3[$l]=$idOchered;
              $l++;
              $erw=$db->GetTimede($userGrop,$mk);
              $db->SetTimede($userGrop,"time".(string)$index,substr($erw,0,10).time());

             }
             else
             {
                 if(time()-(int)substr($ocherde[0][0],5,strlen($ocherde[0][0])-5)>10){
                     if($ocherde[1][1]==$idOchered && substr($ocherde[0][1],0,5)==substr($id,0,5) && strpos($tr,(string)$index)===false){
                         //   $db->SetError("sad",234234);
                         $mk="time".(string)$index;
                         $tr=$tr.(string)$index;
                         $tr2[$l]=$idnumber;
                         $tr3[$l]=$idOchered;
                         $l++;
                         $erw=$db->GetTimede($userGrop,$mk);
                         $db->SetTimede($userGrop,"time".(string)$index,substr($erw,0,10).time());

                     }else{
                         $db->DeleteOcheredBot($idnumber,$idOchered);
                     }
                 }else{
                     $db->DeleteOcheredBot($idnumber,$idOchered);
                 }
             }
        }
        $stmqt->close();

        for($i=0;$i<strlen($tr);$i++){

                $stmtw = $this->con->prepare("SELECT message,id FROM messages WHERE gropnumber = ? AND Indexq=?");
                $iw=(int)substr($tr,$i,1);
                $iw2=(int)$tr2[$i];
                $stmtw->bind_param("ii", $userGrop,$iw);
                $stmtw->execute();
                $stmtw->bind_result($data2,$id2);

            if($db->Getbotlistonline($iw2)==3){
                while($stmtw->fetch()){
                    $db->OnIncomBot($data2,$iw2);
                    $db->DeleteMessages($iw,$userGrop,(int)$id2);
                }
            }
            $stmtw->close();
            $db->DeleteOcheredBot((int)$tr2[$i],(int)$tr3[$i]);

        }*/

        return $messages;
    }
    function DeleteMessages($userindex,$userGrop){
        //    $db=new DbOperation();
        //   $db->SetError("uyinchi index=".$userindex,$userGrop);
        $path="../json/".$userGrop.".json";
        //$int=(int)substr($userGrop,strlen($userGrop)-1,1);
        //$int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        // $json_a["ochered"][$int]=$time;

        array_splice($json_a["messages"][$userindex], 0, sizeof($json_a["messages"][$userindex]));
        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);
     /*
        if($id!=0){
            $sql="DELETE FROM messages WHERE gropnumber = ? AND indexq=? AND id=?";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param("iii", $userGrop,$userindex,$id);
        }else{
            $sql="DELETE FROM messages WHERE gropnumber = ? AND indexq=? ";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param("ii", $userGrop,$userindex);
        }
        $stmt->execute();*/
    }
    function Javobit($lk){
        sleep(3);
        $db=new DbOperation();
        $ObshiyPul = "0";
        $uyinchilar=$db->Getuyinchilar($lk);
        for ($i = 0; $i < strlen($uyinchilar); $i++)
        {
            $ObshiyPul = (string)((int)($ObshiyPul) + (int)($db->GetTikilganPullar($lk,"TikilganPullar".substr($uyinchilar,$i,1))));
        }
        $mkds = 0;$asosiy = "";
        //100,200,300,400,500
        $Massiv2=array();
        $Massiv=array();
        for($i=0;$i<10;$i++){
            $Massiv2[$i]=0;
            $Massiv[$i]=0;
        }
        for ($i = 1; $i < 10; $i++)
        {
            if ($db->GetJavoblade($lk,"Javoblade".(string)$i)=="")
            {
                $mkds++;
            }
            else
            {
                $asosiy = $asosiy.$i;
                for($t = 0; $t < strlen($uyinchilar); $t++)
                {
                    if (substr($uyinchilar,$t,1) == $i)
                    {
                        $Massiv2[$i] = $db->GetTikilganPullar($lk,"TikilganPullar".(string)$i);

                        $Massiv[$i] = $Massiv2[$i];
                        $t = 10;
                    }
                }
            }
        }
        $mkds = 9 - $mkds; $kmn = "";
        if ($mkds == 1)
        {
            for($i = 1; $i < 10;$i++)
            {
                $kmn = $kmn.$db->GetJavoblade($lk,"Javoblade".(string)$i);

            }
        }
        else
        { $javoblade=array();
            $javoblade[0]="";
            for($l=1;$l<10;$l++){

                $javoblade[$l]=$db->GetJavoblade($lk,"Javoblade".(string)$l);
            }
            $d=array();
            $d[0] = "st"; $d[1] = "p1"; $d[2] = "p2"; $d[3] = "se";
            $d[4] = "sr"; $d[5] = "fl"; $d[6] = "fs";
            while (strlen($asosiy) > 0)
            {
                $b =array();
                $b1 =array();
                $t1 =0;
                $t =-1;
                for ($i = 0; $i < strlen($asosiy); $i++)
                {
                    //print(i + " " + asosiy + " d=" + Javoblade[lk, int.Parse(asosiy.Substring(i, 1))]);
                    //113579RR3p121di22he2121020
                    //     $toshde = (int)(substr($db->GetJavoblade($lk,"Javoblade".substr($asosiy,$i,1)),2,1));
                    if (strlen($javoblade[(int)substr($asosiy,$i,1)]) > 20 &&(int)(substr($javoblade[(int)substr($asosiy,$i,1)],19,strlen($javoblade[(int)substr($asosiy,$i,1)])-19)) >0)
                    {
                        $ObshiyPul = (string)((int)(substr($javoblade[(int)substr($asosiy,$i,1)],19,strlen($javoblade[(int)substr($asosiy,$i,1)])-19)));
                    }
                    //   print(i + toshde);
                    $b[(int)substr($asosiy,$i,1)] =
                        substr($javoblade[(int)substr($asosiy,$i,1)],3,2);
                    $b1[(int)substr($asosiy,$i,1)] = substr($javoblade[(int)substr($asosiy,$i,1)],5,2);
                    //  print(" b=" + b[int.Parse(asosiy.Substring(i, 1))]);
                    //  print(" b1=" + b1[int.Parse(asosiy.Substring(i, 1))]);
                    for ($x = 0; $x < 7; $x++)
                    {
                        if ($d[$x] == $b[(int)substr($asosiy,$i,1)])
                        {
                            if ($x > $t) { $t = $x; $t1 = substr($asosiy,$i,1);break; }
                            if ($x == $t) { $t1 = $t1.substr($asosiy,$i,1); }
                            if (strlen($t1) > 1)
                            {
                                $k1 = 0; $k2 = "";
                                for ($k = 0; $k < strlen($t1); $k++)
                                {
                                    if ((int)($b1[(int)substr($t1,$k,1)]) > $k1) { $k2 = substr($t1,$k,1); $k1 = (int)($b1[(int)substr($t1,$k,1)]);}
                                    else
                                    {
                                        if ((int)($b1[(int)substr($t1,$k,1)]) == $k1) { $k2 = $k2.substr($t1,$k,1); }
                                    }
                                }
                                $t1 = $k2;
                            }
                        }
                    }
                }
                // print("1:" + t1);
                $kmn = $kmn.$t1.":";
                for ($i = 0; $i < strlen($t1); $i++)
                {
                    $asosiy = str_replace(substr($t1,$i,1),"",$asosiy);
                }
            }

            $Pullar = array();
            $g = array();
            for ($i=0;$i<10;$i++)
            {
                $Pullar[$i] = "0";
                $g[$i] = "";
            }
            $doctor = (int)($ObshiyPul);
            sort($Massiv2);
            for($i = 0; $i < sizeof($Massiv2); $i++)
            {
                if($Massiv2[$i]!=0){
                    for($ml = 0; $ml < 10; $ml++)
                    {
                        if ($ml==0) { $doctor = (int)($ObshiyPul); }
                        if ($Pullar[$ml]!="0" && $Pullar[$ml] != $ObshiyPul)
                        {
                            $doctor = $doctor - (int)($Pullar[$ml]);
                        }
                    }
                    for($t = $i; $t < sizeof($Massiv2); $t++)
                    {
                        if ($Massiv2[$i]<=$Massiv2[$t] && $Massiv2[$t]!=0 && $Massiv2[$i] != 0)
                        {
                            $doctor = $doctor - $Massiv2[$t] + $Massiv2[$i];
                            //    $db->SetError("Massiv t=" .$Massiv2[$t]." Massiv i=".$Massiv2[$i]." Doctor=".$doctor,$lk);
                            for($h = 1; $h < 10; $h++)
                            {
                                if( strpos($g[$i],(string)$h)===false && $Massiv2[$t] <= $Massiv[$h])
                                {
                                    $g[$i] = $g[$i].$h;
                                }
                            }
                        }
                    }
                    $Pullar[$i] = (string)$doctor;
                }else{
                    $Pullar[$i] ="0";
                }
            }
            $rt=";";
            $rt2=";";
            for($i=0;$i<10;$i++){
                $rt=$rt." ".$Pullar[$i];
                $rt2=$rt2." ".$g[$i];
            }
            // $db->SetError("Pullar-".$kmn." ".$rt." ".$rt2,$lk);
            $sdasd="";
            $Golib =array();   $dfg = 0;
            $Golib2 = array(); $dfg2 = 0;
            $Golib3 = array(); $dfg3 = 0;
            for($i=0;$i<10;$i++){
                $Golib[$i] ="";
                $Golib2[$i] = "";
                $Golib3[$i] = "";
            }
            for ($i = 0; $i < sizeof($Pullar); $i++)
            {
                if ($Pullar[$i] != "0" && $g[$i]!=""&&$sdasd!= $Pullar[$i].$g[$i])
                {
                    // $db->SetError($Pullar[$i]. " Pul",$lk);
                    //$db->SetError($g[$i]." g",$lk);
                    $sdasd = $Pullar[$i]. $g[$i];
                    for($t = 0; $t <strlen($kmn) ; $t++)
                    {//kmn= 12:3:7:4:6:59:8:
                        for ($t2 = 0; $t2 <strlen($g[$i]); $t2++)
                        {//4-1 400 4001 4001 4:1: 4 1
                            //    $db->SetError($g[$i]." gi t=".$t." t2=".$t2." kmn=".$kmn." ".sizeof($g[$i]),$lk);
                            if (substr($kmn,$t,1)!=":" && substr($kmn,$t,1) == substr($g[$i],$t2,1))
                            {
                                $Golib[$dfg] = substr($kmn,$t,1).$Pullar[$i];
                                if(strlen($kmn) > $t + 1)
                                {
                                    if (substr($kmn,$t+1,1) != ":")
                                    {
                                        // dfg2 = 0;Pullar dfg ga bogliq
                                        for ($t3 = 0; $t3< strlen($g[$i]); $t3++)
                                        {
                                            if (substr($kmn,$t+1,1) == substr($g[$i],$t3,1))
                                            {
                                                //   print(dfg2);
                                                $Golib2[$dfg2] = substr($kmn,$t+1,1).$Pullar[$i];
                                                if (sizeof($kmn) > $t+2)
                                                {
                                                    if (substr($kmn,$t+2,1) != ":")
                                                    {
                                                        //    dfg3 = 0;
                                                        for ($t4 = 0; $t4 < strlen($g[$i]); $t4++)
                                                        {
                                                            if (substr($kmn,$t+2,1) == substr($g[$i],$t4,1))
                                                            {
                                                                $Golib3[$dfg3] = substr($kmn,$t+2,1) . $Pullar[$i];
                                                                $t = 100; $t2 = 100; $t3 = 10; $t4 = 100;
                                                            }
                                                        }
                                                    }
                                                }
                                                $t = 100; $t2 = 100;$t3 = 100;
                                            }
                                        }
                                    }
                                }
                                $t = 100;$t2 = 100;
                            }
                        }
                    }
                    $dfg++; $dfg2++; $dfg3++;
                }
            }

            $rt=";";
            for($i=0;$i<10;$i++){
                $rt=$rt." ".$Golib[$i];
            }
            for ($i = 0; $i < 10; $i++)
            {
                for ($t = 0; $t < 10; $t++)
                {
                    if(($Golib[$t]!=null ||$Golib[$t] != "")&& ($Golib[$i] != null||$Golib[$t] != "") && substr($Golib[$i],0,1)==substr($Golib[$t],0,1) && $t!=$i)
                    {
                        $Golib[$i] =  substr($Golib[$i],0,1) .(string)((int)(substr($Golib[$i],1,strlen($Golib[$i])-1))+
                                (int)(substr($Golib[$t],1,strlen($Golib[$t])-1)));
                        $Golib[$t] = null;
                    }
                    if($Golib2[$t]!=null && $Golib2[$i] != null && substr($Golib2[$i],0,1)==substr($Golib2[$t],0,1) && $t!=$i)
                    {
                        $Golib2[$i] =  substr($Golib2[$i],0,1) .(string)((int)(substr($Golib2[$i],1,strlen($Golib2[$i])-1))+
                                (int)(substr($Golib2[$t],1,strlen($Golib2[$t])-1)));
                        $Golib2[$t] = null;
                    }
                    if($Golib3[$t]!=null && $Golib3[$i] != null && substr($Golib3[$i],0,1)==substr($Golib3[$t],0,1) && $t!=$i)
                    {
                        $Golib3[$i] =  substr($Golib3[$i],0,1) .(string)((int)(substr($Golib3[$i],1,strlen($Golib3[$i])-1))+
                                (int)(substr($Golib3[$t],1,strlen($Golib3[$t])-1)));
                        $Golib3[$t] = null;
                    }
                }
            }
            $kmn = "";
            for ($i = 0; $i < 10; $i++)
            {
                if ($Golib[$i] != null ||$Golib[$i] != "")
                {
                    $kmn = $kmn.substr($db->GetJavoblade($lk,"Javoblade".substr($Golib[$i],0,1)),0,19).str_pad(substr($Golib[$i],1,strlen($Golib[$i])-1) ,12,"0",STR_PAD_LEFT);
                }
            }

            for ($i = 0; $i < 10; $i++)
            {
                if ($Golib2[$i] != null)
                {
                    $kmn = $kmn .substr($db->GetJavoblade($lk,"Javoblade".substr($Golib2[$i],0,1)),0,19).str_pad(((int)substr($Golib2[$i],1,strlen($Golib2[$i])-1))/2 ,12,"0",STR_PAD_LEFT);
                    $jk = substr($db->GetJavoblade($lk,"Javoblade".substr($Golib2[$i],0,1)),3,4);
                    for ($t = 0; $t < strlen($kmn); $t++)
                    {
                        if (strlen($kmn)>$t+7 && substr($kmn,$t+3,4) == $jk)
                        {
                            if((int)(substr($kmn,$t+19,12)) > (int)substr($Golib2[$i],1,strlen($Golib2[$i])-1))
                            {
                                $kmn = substr($kmn,0,$t).substr($kmn,$t,19).str_pad((string)(((int)(substr($kmn,$t+19,12))-(int)substr($Golib2[$i],1,strlen($Golib2[$i])-1))/2),12,"0",STR_PAD_LEFT).substr($kmn,$t+31,strlen($kmn)-$t-31);
                            }
                            else
                            {
                                $kmn = substr($kmn,0,$t).substr($kmn,$t,19).str_pad((string)(-((int)(substr($kmn,$t+19,12)))/2+(int)substr($Golib2[$i],1,strlen($Golib2[$i])-1)),12,"0",STR_PAD_LEFT).substr($kmn,$t+31,strlen($kmn)-$t-31);
                            }
                            $t = 1000;
                        }
                    }
                }
            }
            for ($i = 0; $i < 10; $i++)
            {
                if ($Golib3[$i] != null)
                {
                    $jk=substr($db->GetJavoblade($lk,"JAvoblade".substr($Golib3[$i],0,1)),3,4);
                    $a1 =0; $a2=0; $a3=0;
                    for ($t = 0; $t < strlen($kmn); $t++)
                    {
                        if (strlen($kmn) > $t + 10 && substr($kmn,$t+3,4) == $jk)
                        {
                            if ($a2 == 0)
                            {
                                $a2= (int)substr($kmn,$t+19,12) ;
                            }
                            else
                            {
                                if ($a3 == 0)
                                {
                                    $a3 = (int)substr($kmn,$t+19,12) ;
                                }
                            }
                            $t = $t + 30;
                        }
                    }
                    $a1 = (int)(substr($Golib3[$i],1,strlen($Golib3[$i])-1));
                    if ($a2 > $a3)
                    {
                        $a2 = $a2 + $a3;
                        $a3 = $a3 * 2;
                    }
                    else
                    {
                        $a3 = $a3 + $a2;
                        $a2 = $a2 * 2;
                    }
                    if($a1 <= $a2 && $a3 >= $a1)
                    {
                        $kmn = $kmn.substr($db->GetJavoblade($lk,"Javoblade".substr($Golib3[$i],0,1)),0,19).str_pad((string)(((int)substr($Golib3[$i],1,strlen($Golib3[$i])-1))/3) ,12,"0",STR_PAD_LEFT);
                        for ($t = 0; $t < strlen($kmn); $t++)
                        {
                            if (strlen($kmn) > $t + 10 && substr($kmn,$t+3,4) == $jk)
                            {
                                if ($a2 != 0)
                                {
                                    $kmn=substr($kmn,0,19+$t).str_pad((string)($a2-$a1+$a1/3),12,"0",STR_PAD_LEFT).substr($kmn,$t+31,strlen($kmn)-$t-31);
                                    $a2 = 0;
                                }
                                else
                                {
                                    if ($a3 != 0)
                                    {
                                        $kmn=substr($kmn,0,19+$t).str_pad((string)($a3-$a1+$a1/3),12,"0",STR_PAD_LEFT).substr($kmn,$t+31,strlen($kmn)-$t-31);
                                        $a3 = 0;
                                    }
                                }
                                $t = $t + 30;
                            }
                        }
                    }
                    else
                    {
                        if ($a2 <= $a1 && $a3 >= $a2)
                        {
                            for ($t = 0; $t < strlen($kmn); $t++)
                            {
                                if (strlen($kmn)> $t + 10 && substr($kmn,$t+3,4) == $jk)
                                {
                                    if ($a2 != 0)
                                    {
                                        $kmn=substr($kmn,0,19+$t).str_pad((string)($a2/3),12,"0",STR_PAD_LEFT).substr($kmn,$t+31,strlen($kmn)-$t-31);
                                        $a2 = 0;
                                    }
                                    else
                                    {
                                        if ($a3 != 0)
                                        {
                                            $kmn=substr($kmn,0,19+$t).str_pad((string)($a3-$a2+$a2/3),12,"0",STR_PAD_LEFT).substr($kmn,$t+31,strlen($kmn)-$t-31);
                                            $a3 = 0;
                                        }
                                        else
                                        {
                                            if ($a1 != 0)
                                            {
                                                $kmn=substr($kmn,0,19+$t).str_pad((string)($a1-$a2+$a2/3),12,"0",STR_PAD_LEFT).substr($kmn,$t+31,strlen($kmn)-$t-31);
                                                $a1 = 0;
                                            }
                                        }
                                    }
                                    $t = $t + 31;
                                }
                            }
                        }
                        else
                        {
                            if ($a3 <= $a2 && $a1 >= $a3)
                            {
                                for ($t = 0; $t < strlen($kmn); $t++)
                                {
                                    if (strlen($kmn) > $t + 10 && substr($kmn,$t+3,4) == $jk)
                                    {
                                        if ($a2 != 0)
                                        {
                                            $kmn=substr($kmn,0,19+$t).str_pad((string)($a2-$a3+$a3/3),12,"0",STR_PAD_LEFT).substr($kmn,$t+31,strlen($kmn)-$t-31);
                                            $a2 = 0;
                                        }
                                        else
                                        {
                                            if ($a3 != 0)
                                            {
                                                $kmn=substr($kmn,0,19+$t).str_pad((string)($a3/3),12,"0",STR_PAD_LEFT).substr($kmn,$t+31,strlen($kmn)-$t-31);
                                                $a3 = 0;
                                            }
                                            else
                                            {
                                                if ($a1 != 0)
                                                {
                                                    $kmn=substr($kmn,0,19+$t).str_pad((string)($a1-$a3+$a3/3),12,"0",STR_PAD_LEFT).substr($kmn,$t+31,strlen($kmn)-$t-31);
                                                    $a1 = 0;
                                                }
                                            }
                                        }
                                        $t = $t + 31;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        for ($i = 0; $i < strlen($kmn); $i++)
        {
            if (strlen($kmn) > $i + 2 &&substr($kmn,$i,2) == "RR")
            {
                $db->SetOxirgiZapislar(
                    substr($db->GetOxirgiZapisplar($lk,"OxirgiZapis".substr($kmn,$i+2,1)),0,14)
                    .str_pad((string)((int)substr($db->GetOxirgiZapisplar($lk,"OxirgiZapis".substr($kmn,$i+2,1)),14,12)+(int)substr($kmn,19+$i,12)),12,"0",STR_PAD_LEFT)
                    .substr($db->GetOxirgiZapisplar($lk,"OxirgiZapis".substr($kmn,$i+2,1)),26,strlen($db->GetOxirgiZapisplar($lk,"OxirgiZapis".substr($kmn,$i+2,1)))-26)
                    ,$lk,
                    "OxirgiZapis".substr($kmn,$i+2,1)
                );
                $i = $i + 30;
            }
        }
        //%%NameByMe\Ism\0001\gruppa\00000001000$\pul\000000000000\yul\00000\level\000000001000\pul\xb0000000000\id\
        for ($i = 0; $i < strlen($uyinchilar); $i++)
        {
            $db->SetOxirgiZapislar(substr($db->GetOxirgiZapisplar($lk,"OxirgiZapis".substr($uyinchilar,$i,1)),0,27)
                ."000000000000".substr($db->GetOxirgiZapisplar($lk,"OxirgiZapis".
                        substr($uyinchilar,$i,1)).substr($uyinchilar,$i,1),39,strlen($db->GetOxirgiZapisplar($lk,"OxirgiZapis".
                        substr($uyinchilar,$i,1)))-39),$lk,"OxirgiZapis".substr($uyinchilar,$i,1)
            );
        }
        if($kmn != ""){ $db->SEndMEssageToGroup($lk,$uyinchilar,$kmn); }
        sleep(6);
        $minSatck = $db->TurnLk($lk);
        $db=new DbOperation();
        $db->SetKartatarqatildi("false",$lk);
        $db->YurishAsosiy($lk,$minSatck,2);
    }
    //Davom etishi uyinni
    function UyinniDAvomEttir($data){
        if(strpos($data,"$")!==false && strpos($data,"^")!==false && strlen($data) > 32)
        {
            //%%NameByMe0001000000039990$000000000010000000040000xb00000000011
            //1000000000980000000000020$^100010
            //3000000000980000000000020$^1021010
            $Index = (int)substr($data,0,1);
            $GroupNumber =(int)substr($data,28,4);
            $keraklide = (int)substr($data,27,1);
            $yol =(int)substr($data,13,12);
            $pul = (int)substr($data,1,12);
            $mik = (int)substr($data,32,1);
            $db=new DbOperation();
             $db->SetError("Time1=".microtime(),324);

            $tr="false";
            for($l=0;$l<11;$l++){
                $ochered=$db->getOchered($GroupNumber);
                $rt="false";

                if(sizeof($ochered)>0){
                    if(substr($ochered[0],0,10)==$Index){
                        break;
                    }else{
                        if(time()-(int)substr($ochered[0],10,strlen($ochered[0])-10)>20){
                            $db->DeleteOchered($GroupNumber,substr($ochered[0],0,10));
                            $rt="true";
                        }
                    }
                }

                if($l==0){
                    if(sizeof($ochered)>2){
                        $tr="true";
                        break;
                    }else{
                        $db->setOchered($Index,$GroupNumber,(string)time());
                    }
                }else{
                    if($l!=1&&$rt=="false"){
                        sleep(1);
                    }
                }

                if($l==8){
                    $tr="true";
                    break;
                }
            }


            if($tr){


            $oxirgizapis = $db->GetOxirgiZapisplar($GroupNumber,"OxirgiZapis".(string)$Index);
            $yurishkimmiki=$db->GetYurishKimmiki($GroupNumber);
            $kartaTarqatildi=$db->GetKartatarqatildi($GroupNumber);
            $uyinchilar=$db->Getuyinchilar($GroupNumber);
            $huy=$db->GetHuy($GroupNumber);
            $hu3=$db->Gethu3($GroupNumber)+1;

            $db->SetError("Time2=".microtime(),324);

            $Level ="000001";$Name ="NameByMe";
            $Id="0000000001";$Money ="";
            if ($GroupNumber > 0 && $GroupNumber < 3200 && strlen($oxirgizapis) > 68)
            {
                $Level = substr($oxirgizapis,39,6);
                $Id = substr($oxirgizapis,59,10);
                $Name = substr($oxirgizapis,2,8);
                $Money = substr($oxirgizapis,45,12);
            }
            if(strpos($data,"&")!==false)
            {
                $Pas = "true";
            }
            else
            {
                $Pas = "false";
            }

            if(strlen($yurishkimmiki)>1 && (string)$Index == substr($yurishkimmiki,0,1) && $kartaTarqatildi=="true")
            {
                    $lk = $GroupNumber;
                    $a =substr($yurishkimmiki,0,1);  $b = substr($yurishkimmiki,1,strlen($yurishkimmiki)-1);
                for($i = 0;$i < strlen($yurishkimmiki);$i++){
                    //1000000000350000000000050$^201020 a=1 b=13113
                    if ($i + 2 == strlen($yurishkimmiki))
                    {
                        $yurishkimmiki=substr($b,0,1).$b;break;
                    }
                    else
                    {
                        if ($a ==substr($b,$i,1))
                        {
                            $yurishkimmiki=substr($b,$i+1,1).$b;break;
                        }
                    }
                }
                $db->SetError("Time3=".microtime(),324);

                $db->SetYurishKimmiki($yurishkimmiki,$GroupNumber);
                $db->SetTimede2($lk,"time".substr($yurishkimmiki,0,1),(string)time());
                $db->Setkimmiyurishi(substr($yurishkimmiki,0,1)."true",$lk);
                $db->SetOxirgiZapislar("%%".$Name.str_pad((string)$GroupNumber,4,"0",STR_PAD_LEFT).
                str_pad((string)$pul,12,"0",STR_PAD_LEFT)."$".str_pad((string)$yol,12,"0",STR_PAD_LEFT) .$Level .
                    str_pad((string)$Money,12,"0",STR_PAD_LEFT)."xb".$Id.
                    (string)$Index,$GroupNumber,"OxirgiZapis".(string)$Index);
                if ($keraklide == 1)
                {
                    $db->SetHuy(strlen($yurishkimmiki)-1,$lk);
                    $huy=strlen($yurishkimmiki)-1;
                }
                $db->SetError("Time4=".microtime(),324);

                        $pasde = (string)$huy.(string)$huy;

                        if($Pas=="true"){
                            $pasde=(string)$huy."&";
                                $yurishkimmiki=str_replace((string)$Index,"",$yurishkimmiki);
                                $db->SetYurishKimmiki($yurishkimmiki,$lk);
                             if(strlen($yurishkimmiki)<3){
                                $db->SetHuy(strlen($yurishkimmiki)-1,$lk);
                                $huy=strlen($yurishkimmiki);
                                 $pasde=(string)$huy."&";
                                 if(strlen($data)>34){
                                     $stmqt = $this->con->prepare("SELECT indexs,idnumber FROM botgrouplar WHERE groupnumber = ?");
                                     $stmqt->bind_param("i", $GroupNumber);
                                     $stmqt->execute();
                                     $stmqt->bind_result($index4,$idnumber);
                                     while($stmqt->fetch()){
                                        // $db->SetError("index=".$index4." yur=".substr($yurishkimmiki,0,1),324);
                                         if(substr($yurishkimmiki,0,1)==(string)$index4){  $db->OnIncomBot("TakeiT" . substr($yurishkimmiki,0,1) .
                                             str_pad((string)$GroupNumber,4,"0",STR_PAD_LEFT) . str_pad((string)substr($data,strlen($data)-12,12),12,"0",STR_PAD_LEFT),
                                             $idnumber,$lk); }
                                     }
                                 }
                             }
                        }

                        if(strlen($yurishkimmiki) > 2 && $keraklide >= $huy){
                            $lops=0;
                            for($t = 0; $t < strlen($yurishkimmiki)-1; $t++)
                            {
                                $tikilgsnpul="TikilganPullar".substr($yurishkimmiki,$t+1,1);
                                $OxirgiZapis="OxirgiZapis".substr($yurishkimmiki,$t+1,1);
                                $OxirgiZapis2=$db->GetOxirgiZapisplar($lk,$OxirgiZapis);
                                if((int)substr($OxirgiZapis2,14,12)!=0){
                                    $lops++;
                                }
                                $db->SetTikilganPullar($tikilgsnpul,(int)$db->GetTikilganPullar($lk,$tikilgsnpul)+(int)substr($OxirgiZapis2,27,12),$lk);
                            }
                            $db->SetHuy(strlen($yurishkimmiki)-1,$lk);
                            $huy=strlen($yurishkimmiki)-1;

                            if($lops<2){$hu3=4;$mik=3;}
                            $db->Sethu3($hu3,$lk);
                            if($Pas=="true"){$huy=strlen($yurishkimmiki);$pasde="&".$db->GetXAmmakartalar($lk).$huy;}else{$pasde=$db->GetXAmmakartalar($lk).$huy;}
                        }

                        if($yurishkimmiki==""){$yurishkimmiki="0";}
                        $data = $Index.str_pad($pul,12,"0",STR_PAD_LEFT).str_pad($yol,12,"0",STR_PAD_LEFT)."$^" .$keraklide.$mik .$pasde;

                        $db->SetError("Time3.1=".microtime(),324);
                        $db->SEndMEssageToGroup($lk,$uyinchilar,$data.substr($yurishkimmiki,0,1).str_pad($lk,4,"0",STR_PAD_LEFT));
                         $db->SetError("Time5=".microtime(),324);

                        if($keraklide >= $huy && $hu3 == 4)
                        {
                            for($t = 1; $t < 10; $t++)
                            {
                                $javboblede="Javoblade".(string)$t;
                                $db->SetJavoblade($javboblede,"",$lk);
                            }
                            $db->Sethu3(0,$lk);
                            $db->Javobit($lk);
                        }

                        if($Pas=="true"&&(strlen($yurishkimmiki) == 2)){
                            $db->Sethu3(0,$lk); $db->Pas($lk,1);  }
            } }
            $db->DeleteOchered($GroupNumber,$Index);
        }
        return "Zo'r";
    }
    function DeleteBot($lk,$index){

        $path="../json/".$lk.".json";
        //$int=(int)substr($userGrop,strlen($userGrop)-1,1);
        //$int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        // $json_a["ochered"][$int]=$time;

        for($i=0; $i<sizeof($json_a["bots"]);$i++){
            if($json_a["bots"][$i]["indexq"]==$index){
                array_splice($json_a["bots"], $i, 1);
                break;
            }
        }
        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);

    /*        $sql="DELETE FROM botgrouplar WHERE groupnumber = ? AND indexs=?   ";
            $stmt2 = $this->con->prepare($sql);
            $stmt2->bind_param("ii", $lk,$index);
            $stmt2->execute();
            $sql="DELETE FROM botlist WHERE groupnumber = ? AND indexq=?  ";
            $stmt3 = $this->con->prepare($sql);
            $stmt3->bind_param("ii", $lk,$index);
            $stmt3->execute();
            $sql="DELETE FROM ocheredbot WHERE groupnumber = ?  AND indexPlayer=? ";
            $stmt4 = $this->con->prepare($sql);
            $stmt4->bind_param("ii", $lk,$index);
            $stmt4->execute();*/
    }
    //Rrnikirishi
    function RRniKiritish($data){
        if (strlen($data)>19&&substr($data,0,2)=="RR")
        {
            $db=new DbOperation();
            //RR1at21sp21sp1621020
            $lk =(int)(substr($data,15,4)) ;
            $index = (int)(substr($data,2,1));
            $tr="false";
            for($l=0;$l<11;$l++){
                $ochered=$db->getOchered($lk);
                $rt="false";

                if(sizeof($ochered)>0){
                    if(substr($ochered[0],0,10)==$index){
                        break;
                    }else{
                        if(time()-(int)substr($ochered[0],10,strlen($ochered[0])-10)>20){
                            $db->DeleteOchered($lk,substr($ochered[0],0,10));
                            $rt="true";
                        }
                    }
                }

                if($l==0){
                    if(sizeof($ochered)>2){
                        $tr="true";
                        break;
                    }else{
                        $db->setOchered($index,$lk,(string)time());
                    }
                }else{
                    if($l!=1&&$rt=="false"){
                        sleep(1);
                    }
                }

                if($l==8){
                    $tr="true";
                    break;
                }
            }

            if($tr){
                $javabde=$db->GetJavoblade($lk,"Javoblade".(string)$index);
                //st,p1,p2,se,fl,sr,fs  RR2p122he12di12
                if ($javabde == "" || $javabde == null)
                {
                    $db->SetJavoblade("Javoblade".(string)$index,$data,$lk);
                }

            }

            $db->DeleteOchered($lk,$index);
        }
        return "Zo'r";
    }
    //Chiqishde
    function Chiqishde($data,$ochered)
    {   //0=ocheredsiz 1=ocheredli
        $db=new DbOperation();
        $lk = (int)(substr($data,10,4));
        $index = substr($data,9,1);
        $Id="";
        if($ochered==1){
            $oxirgizapis=$db->GetOxirgiZapisplar($lk,"OxirgiZapis".$index);
            if(strlen($oxirgizapis)>68){
                $Id=substr($oxirgizapis,59,10);
                for($l=0;$l<11;$l++){

                    $ochered=$db->getOchered($lk);
                    $rt="false";

                    if(sizeof($ochered)>0){
                        if(substr($ochered[0],0,10)==$Id){
                            break;
                        }else{
                            if(time()-(int)substr($ochered[0],10,strlen($ochered[0])-10)>20){
                                $db->DeleteOchered($lk,substr($ochered[0],0,10));
                                $rt="true";
                            }
                        }
                    }
                    if($l==0){
                        if(sizeof($ochered)>2){
                            break;
                        }else{
                            $db->setOchered($Id,$lk,(string)time());
                        }
                    }else{
                        if($l!=1&&$rt=="false"){
                            sleep(1);
                        }
                    }
                    if($l==8){
                        break;
                    }
                }
            }
        }

        //  $db->SetError("Chiq",$lk);
        $uyinchilar=$db->Getuyinchilar($lk);
        $kartatarqatildi=$db->GetKartatarqatildi($lk);
        $yurishkimmiki="";

        if(strpos($uyinchilar,(string)$index)!==false){

            $db->DeleteBot($lk,$index);

            $db->SetUyinchilar(str_replace($index,"",$uyinchilar),$lk);
            $uyinchilar=str_replace($index,"",$uyinchilar);

            $db->SetHowManyPlayers(strlen($uyinchilar),$lk);
            $mkdss=strlen($uyinchilar);

            $db->SetOxirgiZapislar("",$lk,"OxirgiZapis".$index);

            $db->DeleteMessages($index,$lk);

            $db->SetTimede($lk,"time".$index,"");
            $db->SetTimede2($lk,"time".$index,"");


            $yurishkimmiki=$db->GetYurishKimmiki($lk);
            if(strpos($yurishkimmiki,$index)!==false)
            {
                if($kartatarqatildi=="true")
                {
                    if (substr($yurishkimmiki,0,1) != $index)
                    {
                        $db->SetYurishKimmiki(str_replace($index,"" ,$yurishkimmiki),$lk);
                        $yurishkimmiki=str_replace($index,"" ,$yurishkimmiki);
                    }
                    else
                    {
                        for ($i = 0; $i < strlen($yurishkimmiki); $i++)
                        {
                            //1000000000350000000000050$^201020 a=1 b=13113
                            $a = substr($yurishkimmiki,0,1); $b = $yurishkimmiki;
                            //   print(a + " " + b);
                            if ($i + 2 == strlen($yurishkimmiki))
                            {
                                $db->SetYurishKimmiki(substr($b,1,1).substr($b,1,strlen($b)-1),$lk);
                                $yurishkimmiki=substr($b,1,1).substr($b,1,strlen($b)-1);
                                break;
                            }
                            else
                            {
                                if ($a ==substr($b,$i+1,1))
                                {
                                    $db->SetYurishKimmiki(substr($b,$i+2,1).substr($b,1,strlen($b)-1),$lk);
                                    $yurishkimmiki=substr($b,$i+2,1).substr($b,1,strlen($b)-1);
                                    break;
                                }
                            }
                        }

                        $db->SetYurishKimmiki(str_replace($index,"" ,$yurishkimmiki),$lk);
                        $yurishkimmiki=str_replace($index,"" ,$yurishkimmiki);
                        if($yurishkimmiki == ""){ $yurishkimmiki = "0"; }else{

                            $db->SetTimede2($lk,"time".substr($yurishkimmiki,0,1),(string)time());
                            $db->Setkimmiyurishi(substr($yurishkimmiki,0,1)."true",$lk);
                        }
                    }
                }
                else
                {
                    $db->SetYurishKimmiki(str_replace($index,"" ,$yurishkimmiki),$lk);
                    $yurishkimmiki=str_replace($index,"" ,$yurishkimmiki);
                    $db->SetHuy($mkdss,$lk);
                }
                //%%NameByMe0001000000000500$000000000000000000000000001500xb0000000004
                //   print("Finally=" + YurishKimmiki[lk].Substring(0, 1) + " " + OxirgiZapisplar[lk, int.Parse(YurishKimmiki[lk].Substring(0, 1))]);
                if ($db->GetHuy($lk) == 1 && strlen($uyinchilar) > 1)
                {
                    $db->Sethu3(0,$lk);
                }
                if (strlen($uyinchilar) < 2)
                {
                    $db->Sethu3(0,$lk);
                }
            }else{
                if($kartatarqatildi!="true"){
                    $db->SetHuy($mkdss,$lk);
                }
            }
            if (strlen($data) > 9)
            {
                $data = substr($data,0,10);
            }
            if (strlen($uyinchilar) > 0)
            {
                if($yurishkimmiki == ""){ $yurishkimmiki = "0"; }
                if (strpos($uyinchilar,$index)===false)
                {
                    $db->SEndMEssageToGroup($lk,$uyinchilar,$data .substr($yurishkimmiki,0,1) .str_pad($lk,4,"0",STR_PAD_LEFT));
                }
            }
            if (strlen($uyinchilar) < 2)
            {
                $db->Setgrop2help($lk,"true");
                $db->SetKartatarqatildi("false",$lk);
                $db->Sethu3(0,$lk);
            }
        }

        if(strlen($Id)>7){ $db->DeleteOchered($lk,$Id);}

        if(strlen($yurishkimmiki)==2 && substr($yurishkimmiki,1,1)==substr($yurishkimmiki,0,1) && strlen($uyinchilar)>1){

            $db->Pas($lk,0);
        }
        return "Zo'r";
    }
    //WWWWLobbi
    function Www($data){
              $db=new DbOperation();
    if(strlen($data)>10 && substr($data,0,3) == "www")
    {
        if (((int)(substr($data,7, 2)) + 2) % 2 == 0)
        {
            for($i = (int)(substr($data,3, 2))+2; $i < 50; $i=$i+2)
                {
                    $t = 0;
                    $tr = (int)(substr($data,5, 2)) * 100 + $i + 700 * ((int)(substr($data,9, 2)) - 1);
                    for ($k = 1; $k < 6; $k++)
                    {
                        if ($db->GetOxirgiZapisplar($tr,$k) == "")
                        {
                            $t = 1;
                        }
                    }
                    if ($t == 1)
                    {
                        $po = "";
                        for($k = 1; $k < 6; $k++)
                        {
                            $zapis=$db->GetOxirgiZapisplar($tr,$k);
                            if ($zapis != "")
                            {
                                $po = $po . substr($zapis,2, 8) .
                                    substr($zapis,14, 12) . substr($zapis,69, 1) . "LLLL";
                            }
                        }
                        return("mmm" . str_pad((string)($tr),4,'0',STR_PAD_LEFT) . $po);break;
                    }
                }
            }
        else
        {
            for ($i = (int)(substr($data,3, 2)) + 2; $i < 50; $i = $i + 2)
                {
                    $t = 0;//www00000001
                    $tr = (int)(substr($data,5, 2)) * 100 + $i + 700 * ((int)(substr($data,9, 2)) - 1) ;
                    for ($k = 1; $k < 10; $k++)
                    {
                        if ($db->GetOxirgiZapisplar($tr,$k) == "")
                        {
                            $t = 1;
                        }
                    }
                    if ($t == 1)
                    {
                        $po = "";
                        for ($k = 1; $k <10; $k++)
                        {
                            $zapis=$db->GetOxirgiZapisplar($tr,$k);
                            if ($zapis != "")
                            {
                                $po = $po.substr($zapis,2, 8).substr($zapis,14, 12).substr($zapis,69, 1)."LLLL";
                            }
                        }
                        return("mmm" .str_pad((string)($tr),4,'0',STR_PAD_LEFT) . $po); break;
                    }
                }
            }
        }
          return "Ass";
    }
    //PullQushis
    function PulQushishde($data){
        $db=new DbOperation();


        if(strlen($data)>19 && substr($data,0, 1) == "!")
        {
            $lk = (int)(substr($data,3,4));
            $index = (int)(substr($data,7,1));
            $oxirgiZapis=$db->GetOxirgiZapisplar($lk,"OxirgiZapis".(string)$index);
            $minSatck = $db->TurnLk($lk);
            //!##01018000000000120

        if (substr($data,0, 3) == "!@#")
        {
            $db->SEndMEssageToGroup($lk,$db->Getuyinchilar($lk),$data);
            //uyinni boshlash kere
            $db->SetOxirgiZapislar(
                substr($oxirgiZapis,0,14).substr($data,8,12).substr($oxirgiZapis,26,strlen($oxirgiZapis)-26)
                ,$lk,"OxirgiZapis".$index);

            $db->YurishAsosiy($lk, $minSatck, 2);
        }
            if(substr($data,0, 3) == "!##")
            {
                $db->SEndMEssageToGroup($lk,$db->Getuyinchilar($lk),$data);

                $db->SetOxirgiZapislar(
                    substr($oxirgiZapis,0,14).substr($data,8,12).substr($oxirgiZapis,26,strlen($oxirgiZapis)-26)
                    ,$lk,"OxirgiZapis".$index);
            }
        }
        //chat
        if(strlen($data)>3 && substr($data,0,2)=="MM"){
            $lk = (int)(substr($data,2,4));
            $db->SEndMEssageToGroup($lk,$db->Getuyinchilar($lk),$data);
        }
        //Smile
        if(strlen($data)>10&& substr($data,0,5)=="Smile"){
            $lk = (int)(substr($data,5,4));
            $db->SEndMEssageToGroup($lk,$db->Getuyinchilar($lk),$data);
        }

        //Search
        if(strlen($data)>8){
            if (substr($data,0,8) == "Searchde")
            {
                if (strlen($data) > 15)
                {
                    if (substr($data,8, 8) != "NameByMe")
                    {
                        if (strlen($data)==18 /*&& substr($data,8, 10).Any(char.IsDigit)*/)
                        {
                            //if was id
                            $ij = "";
                            $stmt = $this->con->prepare("SELECT Imagenumber,money,ContactName,id FROM players WHERE id = ?");
                            $jkewe=(int)(substr($data,8,10));
                            $stmt->bind_param("i",$jkewe );
                            $stmt->execute();
                            $stmt->bind_result($imageNumber,$money,$Name,$idde);
                            while($stmt->fetch()){
                                $ij=$imageNumber.str_pad((string)$money,12,'0',STR_PAD_LEFT).$Name.str_pad((string)$idde,10,'0',STR_PAD_LEFT);
                                break;
                            }
                          return("SearchResult:1"  . $ij);
                        }
                        else
                        {
                            $ij = "";
                            $gi = 0;
                            //was Name
                            $stmt = $this->con->prepare("SELECT Imagenumber,money,ContactName,id FROM players WHERE ContactName = ?");
                            $jkewe=(substr($data,8,strlen($data)-8));
                            $stmt->bind_param("s",$jkewe );
                            $stmt->execute();
                            $stmt->bind_result($imageNumber,$money,$Name,$idde);
                            while($stmt->fetch()){
                                $ij=$imageNumber.str_pad((string)$money,12,'0',STR_PAD_LEFT).$Name.str_pad((string)$idde,10,'0',STR_PAD_LEFT);
                                $gi++;
                            }
                           return("SearchResult:" . $gi . $ij);
                        }
                    }
                    else
                    {
                        return("SearchResult:0");
                    }
                }
                else
                {
                    //was Name
                    $ij = "";
                $gi = 0;
                //was Name
                    $stmt = $this->con->prepare("SELECT Imagenumber,money,ContactName,id FROM players WHERE ContactName = ?");
                    $jkewe=(substr($data,8,strlen($data)-8));
                    $stmt->bind_param("s",$jkewe );
                    $stmt->execute();
                    $stmt->bind_result($imageNumber,$money,$Name,$idde);
                    while($stmt->fetch()){
                        $ij=$imageNumber.str_pad((string)$money,12,'0',STR_PAD_LEFT).$Name.str_pad((string)$idde,10,'0',STR_PAD_LEFT);
                        $gi++;
                    }
                       return("SearchResult:" . $gi . $ij);
                }
            }
        }

        return "nmadrde";
    }
    function Chiqeuyindanbot($i,$groupnumber){

        $path="../json/".$groupnumber.".json";
        //$int=(int)substr($userGrop,strlen($userGrop)-1,1);
        //$int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);

        array_splice($json_a["bots"], $i, 1);
        //write
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);

    /*    $k=0;
        $stmt =$this->con->prepare("UPDATE botlist SET online = ?,mik=?,uyindanOldingiPuli=? WHERE id =?");
        $stmt->bind_param("iiii",$k,$k,$k,$i);
        $stmt->execute();*/
    }
    function GetbotlistId($i,$groupnumber){

        $path="../json/".$groupnumber.".json";
        //$int=(int)substr($userGrop,strlen($userGrop)-1,1);
        //$int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $ki1=$json_a["bots"][$i]["Id"];
      /*  $stmt2=$this->con->prepare("SELECT idBot FROM botlist WHERE id=?");
        $stmt2->bind_param("i",$i);
        $stmt2->execute();
        $stmt2->bind_result($ki1);
        $stmt2->fetch();*/
        return $ki1;
    }
    function SetbotlistId($i,$idbot,$groupnumber){

        $path="../json/".$groupnumber.".json";
        //$int=(int)substr($userGrop,strlen($userGrop)-1,1);
        //$int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["bots"][$i]["Id"]=$idbot;
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);
     /*   $stmt2=$this->con->prepare("UPDATE botlist SET idBot=? WHERE id=?");
        $stmt2->bind_param("si",$idbot,$i);
        $stmt2->execute();*/
    }
    function Setbotlistkeraklide($i,$keraklide,$groupnumber){
        $path="../json/".$groupnumber.".json";
        //$int=(int)substr($userGrop,strlen($userGrop)-1,1);
        //$int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["bots"][$i]["keraklide"]=$keraklide;
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);
       /* $stmt2=$this->con->prepare("UPDATE botlist SET keraklide=? WHERE id=?");
        $stmt2->bind_param("ii",$keraklide,$i);
        $stmt2->execute();*/
    }
    function Setbotlistuyinchilar($i,$uyinchilar,$groupnumber){

        $path="../json/".$groupnumber.".json";
        //$int=(int)substr($userGrop,strlen($userGrop)-1,1);
        //$int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["bots"][$i]["uyinchilar"]=$uyinchilar;
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);
   /*     $stmt2=$this->con->prepare("UPDATE botlist SET uyinchilar=? WHERE id=?");
        $stmt2->bind_param("si",$uyinchilar,$i);
        $stmt2->execute();*/
    }
    function SetbotlistIndexAndGroup($i,$index,$groupnumber){

        $path="../json/".$groupnumber.".json";
        //$int=(int)substr($userGrop,strlen($userGrop)-1,1);
        //$int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["bots"][$i]["indexq"]=$index;
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);

    /*    $stmt2=$this->con->prepare("UPDATE botlist SET Indexq=? ,groupnumber=? WHERE id=?");
        $stmt2->bind_param("iii",$index,$groupnumber,$i);
        $stmt2->execute();
        $stmt2->close();
        $stmt2=$this->con->prepare("Select idnumber FROM botgrouplar WHERE id=?");
        $stmt2->bind_param("i",$i);
        $stmt2->execute();
        $stmt2->bind_result($indew);
        $stmt2->fetch();
        $stmt2->close();
        $stmt2=$this->con->prepare("UPDATE botgrouplar SET indexs=? ,groupnumber=? WHERE id=?");
        $stmt2->bind_param("iii",$index,$groupnumber,$indew);
        $stmt2->execute();*/
    }
    function SetbotlistJudgement($i,$judgement,$groupnumber){

        $path="../json/".$groupnumber.".json";
        //$int=(int)substr($userGrop,strlen($userGrop)-1,1);
        //$int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["bots"][$i]["judegement"]=$judgement;
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);

      /* $stmt2=$this->con->prepare("UPDATE botlist SET judgement=? WHERE id=?");
        $stmt2->bind_param("ii",$judgement,$i);
        $stmt2->execute();*/
    }
    function GetbotlistIndex($i,$groupnumber){
        $path="../json/".$groupnumber.".json";
        //$int=(int)substr($userGrop,strlen($userGrop)-1,1);
        //$int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $ki1=$json_a["bots"][$i]["indexq"];

      /*  $stmt2=$this->con->prepare("SELECT Indexq FROM botlist WHERE id=?");
        $stmt2->bind_param("i",$i);
        $stmt2->execute();
        $stmt2->bind_result($ki1);
        $stmt2->fetch();*/
        return $ki1;
    }
    function Getbotlistonline($i,$groupnumber){
        $path="../json/".$groupnumber.".json";
        //$int=(int)substr($userGrop,strlen($userGrop)-1,1);
        //$int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $ki1=$json_a["bots"][$i]["online"];
        /*
        $stmt2=$this->con->prepare("SELECT online FROM botlist WHERE id=?");
        $stmt2->bind_param("i",$i);
        $stmt2->execute();
        $stmt2->bind_result($ki1);
        $stmt2->fetch();*/
        return $ki1;
    }
    function Setbotlistonline($i,$online,$groupnumber){
        $path="../json/".$groupnumber.".json";
        //$int=(int)substr($userGrop,strlen($userGrop)-1,1);
        //$int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $json_a["bots"][$i]["online"]=$online;
        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);

      /*  $stmt2=$this->con->prepare("UPDATE botlist SET online=? WHERE id=?");
        $stmt2->bind_param("ii",$online,$i);
        $stmt2->execute();*/
    }
    function Getall($i,$groupnumber){

        $path="../json/".$groupnumber.".json";
        //$int=(int)substr($userGrop,strlen($userGrop)-1,1);
        //$int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);
        $kl=$json_a["bots"][$i];
        $fd=[$kl["botname"],$kl["groupnumber"],$kl["pul"],$kl["yol"],$kl["money"],$kl["keraklide"],$kl["online"],$kl["uyinchilar"],$kl["Indexq"],$kl["idBot"],
            $kl["Pas"],$kl["uyindanOldingiPuli"],$kl["judgement"],$kl["mik"],$kl["uziniKartasi"],$kl["EngKatta"],$kl["urtadagiKartalar"],$kl["money"],$kl["minstavka"],$kl["qaysiligiKartani"],];
        /*
       /*      $stmt2=$this->con->prepare("SELECT botname,groupnumber,pul,yol,money,keraklide,online,uyinchilar,Indexq,idBot,Pas,
               uyindanOldingiPuli,judgement,mik,uziniKartasi,EngKatta,urtadagiKartalar,money,minstavka,qaysiligiKartani FROM botlist WHERE id=?");
               $stmt2->bind_param("i",$i);
               $stmt2->execute();
               $stmt2->bind_result($fd[0],$fd[1],$fd[2],$fd[3],$fd[4],$fd[5],$fd[6],$fd[7],$fd[8],$fd[9],$fd[10],$fd[11],
                   $fd[12],$fd[13],$fd[14],$fd[15],$fd[16],$fd[17],$fd[18],$fd[19]);
               $stmt2->fetch();*/
        return $fd;
    }
    function Setall($i,$uyindanoldigiPuli,$Pas,$qaysiligiKartani,$keraklide,$mik,$engKatta,$yol,$uziniKartasi,$uyinchilar,$pul,$online,$urtadagikartalar,$GroupNumber){
        $path="../json/".$GroupNumber.".json";
        //$int=(int)substr($userGrop,strlen($userGrop)-1,1);
        //$int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);

        $BotlistNumber=$i;
        $ar = array("online"=>$online, "groupnumber"=>$GroupNumber,  "pul"=>$pul,
             "uyinchilar"=>$uyinchilar, "keraklide"=>$keraklide, "minstavka"=>0,"qaysiligiKartani"=>$qaysiligiKartani,
            "uziniKartasi"=>$uziniKartasi, "urtadagiKartalar"=>$urtadagikartalar
        , "yol"=>$yol,"uyindanOldingiPuli"=>$uyindanoldigiPuli, "Pas"=>$Pas, "mik"=>$mik, "EngKatta"=>$engKatta);
        $json_a["bots"][$BotlistNumber]=$ar;

        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);

        /*
       /* $stmt2=$this->con->prepare("UPDATE botlist SET uyindanOldingiPuli=?,Pas=?,
  qaysiligiKartani=?,keraklide=?,mik=?,EngKatta=?,yol=?,uziniKartasi=?,uyinchilar=?,pul=?,online=?,urtadagiKartalar=? WHERE id=?");
          $stmt2->bind_param("issiiissssisi",$uyindanoldigiPuli,$Pas,
              $qaysiligiKartani,$keraklide,$mik,$engKatta,$yol,$uziniKartasi,$uyinchilar,$pul,$online,$urtadagikartalar,$i);
          $stmt2->execute();*/
    }

    //Botlar
    function CreateBot($Nomerstol, $index){
    //check if is Does anybody online
            $db=new DbOperation();
            $min=$db->TurnLk((int)$Nomerstol);
            $mkf=$db->ChooisePul((int)$Nomerstol);
            $pul=$mkf[0];
            $money=$mkf[1];
        $GroupNumber = (int)$Nomerstol;

        $path="../json/".$GroupNumber.".json";
        //$int=(int)substr($userGrop,strlen($userGrop)-1,1);
        //$int=$int-1;

        //read
        $string = file_get_contents($path);
        $json_a = json_decode($string, true);


            $chars = "BCDFGHJKLMNPQRSTVWXYZ";
            $chars2 = "qwrtypsdfghjklzxcvbnm";
            $chars3 = "aioue";

                  $name=substr($chars,rand(0,20),1).substr($chars3,rand(0,4),1).substr($chars2,rand(0,20),1).substr($chars3,rand(0,4),1).
                  substr($chars2,rand(0,20),1).substr($chars3,rand(0,4),1).substr($chars2,rand(0,20),1).substr($chars3,rand(0,4),1);
            $db->DeleteBot($Nomerstol,$index);
            $Id = "0000000000";
            $Online = 2;

        $BotlistNumber=sizeof($json_a["bots"]);
        $ar = array("online"=>$Online, "groupnumber"=>$GroupNumber, "money"=>$money, "pul"=>$pul,"min"=>$min, "indexq"=>$index, "Id"=>$Id, "botname"=>$name,
            "judegement"=>0, "uyinchilar"=>"", "keraklide"=>0, "minstavka"=>0,"qaysiligiKartani"=>"", "uziniKartasi"=>"", "urtadagiKartalar"=>""
        , "yol"=>"","uyindanOldingiPuli"=>0, "Pas"=>"", "mik"=>0, "EngKatta"=>0);
        $json_a["bots"][$BotlistNumber]=$ar;

        $fp = fopen($path, 'w');
        fwrite($fp, json_encode($json_a));
        fclose($fp);

           /*       $stmt =$this->con->prepare("INSERT INTO botlist ( online,groupnumber,money,pul,minstavka,Indexq,idBot,botname) VALUES(?,?,?,?,?,?,?,?)");
                  $stmt->bind_param("iissiiss",$Online,$GroupNumber,$money,$pul,$min,$index,$Id,$name);
                  $stmt->execute();
                  $idd=$stmt->insert_id;
                  $stmt->close();

                  $stmt =$this->con->prepare("INSERT INTO  botgrouplar (indexs,idnumber,groupnumber) VALUES(?,?,?)");
                  $stmt->bind_param("isi",$index,$idd,$Nomerstol);
                  $stmt->execute();
                  $stmt->close();*/

        $db->OnIncomBot("Jiklo".str_pad("0",10,"0",STR_PAD_LEFT),(int)$BotlistNumber,$GroupNumber);

    //    $db->registerUser("%??" . $Id . $name.str_pad((string)($pul),12,'0',STR_PAD_LEFT). "00" . "f" .str_pad((string)($idd),12,'0',STR_PAD_LEFT));

    }//ochered need
    function OnIncomBot($data,$i,$groupnumber)
    {
        $db=new DbOperation();
        if(strlen($data)>12 && substr($data,0,13) == "ChiqeO'yindan"){
            $r2=$db->Getall($i,$groupnumber);
            $groupnumber=$r2[1];
            $db->Chiqeuyindanbot($i,$groupnumber);
        }
        if(strpos($data,"Jiklo")!==false){
            $r2=$db->Getall($i,$groupnumber);
            $groupnumber=$r2[1];
            $botId=$db->GetbotlistId($i,$groupnumber);
            $online=$r2[6];

          if($botId=="0000000000"){
              $db->SetbotlistId($i,substr($data,5,10),$groupnumber);
          }
          if($online!=0 &&$online!=3 && $online!=1 && substr($data,5,10) != "0000000000" ){

              $rew=$db->UyingaKirish("%%".$r2[0].str_pad((string)($r2[1]),4,'0',STR_PAD_LEFT).str_pad((string)($r2[2]),12,'0',STR_PAD_LEFT).
              "$" .str_pad((string)($r2[3]),12,'0',STR_PAD_LEFT). "000000".str_pad((string)($r2[4]),12,'0',STR_PAD_LEFT) . "xb" . substr($data,5,10)."f");

              $db->OnIncomBot($rew,$i,$groupnumber);
          }
     }
        if(strpos($data,"%%")!==false)
        {
            $botId =$db->GetbotlistId($i,$groupnumber);

            if(substr($data,59,10)==$botId){
               $db->SetbotlistIndexAndGroup($i,(int)substr($data,69,1),(int)substr($data,10,4));
            }
            $db->Setbotlistonline($i,3,$groupnumber);
        }
        if(strpos($data,"!")!==false)
        {
            $r2=$db->Getall($i,$groupnumber);
            $online=$r2[6];
            $qaysiligiKartani=$r2[18];
            $online=$r2[6];$groupnumber=$r2[1];
            $index=$r2[8];$pas=$r2[10];$keraklide=$r2[5];
            $uyinchilar=$r2[7];$judgement=$r2[12];$pul=$r2[2];$yol=$r2[3];
            $uyindanOdingiPuli=$r2[11];$Pas=$r2[10];
            $urtadagikartalar=$r2[16];

            // cl13sp143000000000010!00000000002026359871422201
            if(substr($data,strlen($data)-4,4)==str_pad($r2[1],4,'0',STR_PAD_LEFT) && substr($data,8,1)==(string)$index &&$online==3){

                $uyindanOdingiPuli=$r2[2];$uyinchilar=substr($data,34,strlen($data)-39);$pul=(string)((int)$r2[2]-(int)substr($data,22,12));
                $pas="1";$keraklide=1;$mik=0;$EngKatta=(int)substr($data,22,12);$yol=substr($data,22,12);$uzinKartasi=substr($data,0,8);
                $online=3;$qaysiligiKartani="";
                $db->Setall($i,$uyindanOdingiPuli,$pas,$qaysiligiKartani,$keraklide,$mik,$EngKatta,$yol
                    ,$uzinKartasi,$uyinchilar,$pul,$online,$urtadagikartalar,$r2[1]);

                  $db->SetError("as=".$index." i=".$i,324);

                $db->UyinniDAvomEttir($index .str_pad($pul,12,'0',STR_PAD_LEFT) .str_pad($yol,12,'0',STR_PAD_LEFT) . "$^" . $keraklide . str_pad($r2[1],4,'0',STR_PAD_LEFT) . $mik);

            }else{
                if(substr($data,strlen($data)-4,4)==str_pad($r2[1],4,'0',STR_PAD_LEFT) && $online==3){
                    $db->SetError("as2=".$index." i=".$i,324);

                    $uyindanOdingiPuli=$r2[2];$uyinchilar=substr($data,34,strlen($data)-39);
                    $pas="1";$keraklide=0;$mik=0;$EngKatta=(int)substr($data,22,12);$yol=substr($data,22,12);$uzinKartasi=substr($data,0,8);
                    $online=3;$qaysiligiKartani="";
                    if (substr($data,35,1) == (string)$index)
                        {$pul=(string)((int)$r2[2]-(int)substr($data,22,12));
                            $db->Setall($i,$uyindanOdingiPuli,$pas,$qaysiligiKartani,$keraklide,$mik,$EngKatta,$yol
                                ,$uzinKartasi,$uyinchilar,$pul,$online,$urtadagikartalar,$r2[1]);                        }
                        else
                        {
                            if (substr($data,34,1) == (string)$index)
                            {$pul=(string)((int)$r2[2]-(int)substr($data,22,12)/2);
                                $db->Setall($i,$uyindanOdingiPuli,$pas,$qaysiligiKartani,$keraklide,$mik,$EngKatta,(string)(((int)$yol)/2)
                                    ,$uzinKartasi,$uyinchilar,$pul,$online,$urtadagikartalar,$r2[1]);
                            }
                            else
                            {$pul=(string)((int)$r2[2]-0);
                                $db->Setall($i,$uyindanOdingiPuli,$pas,$qaysiligiKartani,$keraklide,$mik,$EngKatta,"0"
                                    ,$uzinKartasi,$uyinchilar,$pul,$online,$urtadagikartalar,$r2[1]);                            }
                        }
                   }
              }
        }
        if (strlen($data) > 9 && substr($data,0,9) == "Chiqishde")
        {   $r2=$db->Getall($i,$groupnumber);
            $online=$r2[6];$groupnumber=$r2[1];
            $index=$r2[8];$keraklide=$r2[5];$mik=$r2[13];
            $uyinchilar=$r2[7];$judgement=$r2[12];$pul=$r2[2];$yol=$r2[3];
            $uyindanOldingiPuli=$r2[11];$Pas=$r2[10];$UziniKartasi=$r2[14];
            $EngKatta=$r2[15];$UrtadagiKartalar=$r2[16];
            // sp20sp171000000000005!0000000000101220001
            if(substr($data,strlen($data)-4,4) == str_pad($groupnumber,4,'0',STR_PAD_LEFT) &&
                substr($data,strlen($data)-5,1) == (string)$index && $online == "3" && $Pas != "0")
                {
                    $db->Setbotlistkeraklide($i,$keraklide+1,$groupnumber);

                    if(strpos($data,"()")!==false && strlen($data) > 16)
                    {
                        $dsds = "";
                        for ($i1 = 0; $i1 < strlen($data) - 16; $i1++)
                        {
                            if((string)$index !=substr($data,9+$i1,1) && $i == 0)
                            {
                                $uyinchilar=str_replace(substr($data,9+$i1,1),"",$uyinchilar);
                                $db->Setbotlistuyinchilar($i,$uyinchilar,$groupnumber);
                            }
                            else
                            {
                                if ((string)$index != substr($data,9+$i1,1))
                                {
                                    $dsds = $dsds.substr($data,9+$i1,1);
                                }
                            }
                        }
                        for($i1 = 1; $i1 < 10; $i1++)
                        {
                            if (strpos($uyinchilar,(string)$i)!==false)
                            {
                                if (strpos($uyinchilar,(string)$i1)===false && $index != $i1)
                                {
                                      $uyinchilar=str_replace((string)$i1,"",$uyinchilar);
                                       $db->Setbotlistuyinchilar($i,$uyinchilar,$groupnumber);
                                }
                            }
                        }
                    }
                    else
                    {
                        if ((string)$index!= substr($data,9,1))
                        {
                               $uyinchilar=str_replace(substr($data,9,1),"",$uyinchilar);
                                       $db->Setbotlistuyinchilar($i,$uyinchilar,$groupnumber);
                        }
                    }
               //  $db->SetError("NMadr",324);
                        $db->Setall($i,$uyindanOldingiPuli,$Pas,"",$keraklide,$mik,$EngKatta,$yol,$UziniKartasi,$uyinchilar,$pul,$online,$UrtadagiKartalar,$r2[1]);

                        $r2[5]=$keraklide;
                        $r2[7]=$uyinchilar;
                        $r2[15]=$EngKatta;
                        $db->Yurish($i, $data,$r2);

                }
                else
                {
                    if (substr($data,strlen($data)-4,4) == str_pad($r2[1],4,'0',STR_PAD_LEFT) &&
                    $online == "3" && $Pas != "0")
                    {
                        if (strpos($data,"()")!==false && strlen($data) > 16)
                        {
                            $dsds = "";
                            for ($i1 = 0; $i1 < strlen($data) - 16; $i1++)
                            {
                                if ((string)$index !=substr($data,9+$i1,1) && $i == 0)
                                {
                                    $uyinchilar=str_replace(substr($data,9+$i1,1),"",$uyinchilar);
                                    $db->Setbotlistuyinchilar($i,$uyinchilar,$groupnumber);
                                }
                                else
                                {
                                    if ((string)$index != substr($data,9+$i1,1))
                                    {
                                        $dsds = $dsds .substr($data,9+$i1,1);
                                    }
                                }
                            }
                            for ($i1 = 1; $i1 < 10; $i1++)
                            {
                                if (strpos($uyinchilar,(string)$i)!==false)
                                {
                                    if (strpos($uyinchilar,(string)$i1)===false && $index != $i1)
                                    {
                                        $uyinchilar=str_replace((string)$i1,"",$uyinchilar);
                                        $db->Setbotlistuyinchilar($i,$uyinchilar,$groupnumber);
                                    }
                                }
                            }
                        }
                        else
                        {
                            if ((string)$index  != substr($data,9,1))
                            {
                                $uyinchilar=str_replace(substr($data,9,1),"",$uyinchilar);
                                $db->Setbotlistuyinchilar($i,$uyinchilar,$groupnumber);
                            }
                        }
                    }
                }
        }
        if (strpos($data,"$^")!==false)
        {   $r2=$db->Getall($i,$groupnumber);
            $online=$r2[6];$groupnumber=$r2[1];
            $index=$r2[8];$keraklide=$r2[5];$mik=$r2[13];
            $uyinchilar=$r2[7];$judgement=$r2[12];$pul=$r2[2];$yol=$r2[3];
            $uyindanOldingiPuli=$r2[11];$Pas=$r2[10];$UziniKartasi=$r2[14];
            $EngKatta=$r2[15];$UrtadagiKartalar=$r2[16];
            $qaysiligiKartani=$r2[19];


            if (strlen($data)> 45)
            {
                // print("1");//1000000000350000000000050$^20cl20he11he18di18cl19210102
                if ($online == "3" &&  str_pad($r2[1],4,'0',STR_PAD_LEFT) == substr($data ,strlen($data)-4,4))
                    {
                        //   print("2");

                        if($index==(int)substr($data ,strlen($data)-5,1)){ $keraklide=1;  }else{$keraklide=0; }

                        $EngKatta = "0";

                        $mik=substr($data,28,1);
                        $mik++;
                        $yol = "0";
                        $UrtadagiKartalar = substr($data,29,20);
                        if (strpos($data,"&")!==false)
                        {
                            $uyinchilar = str_replace(substr($data,0,1),"",$uyinchilar);
                            $UrtadagiKartalar = substr($data,30,20);
                        }


                        if(strpos($data,"&") !== false && substr(50,1) == "2" && $keraklide == 1)
                        {
                            $pul =(string)((int)($yol) + (int)($pul) + $judgement);
                            $Money = $pul;
                            $uyindanOldingiPuli = 0;
                            //   print("AAAAAA2 " + BotsList[i].judgement);

                            $judgement = 0;
                            $db->SetError("pul1=".$pul,32423);
                            $yol = "0";
                            $mik = 0;
                            $keraklide = 0;
                            $Pas = "1";
                            $UziniKartasi = "";
                            $UrtadagiKartalar = "";
                            $db->SetbotlistJudgement($i,$judgement,$groupnumber);
                            $db->Setall($i,$uyindanOldingiPuli,$Pas,$qaysiligiKartani,$keraklide,$mik,$EngKatta,$yol,$UziniKartasi,$uyinchilar,$pul,$online,$UrtadagiKartalar,$r2[1]);
                        }
                        else
                        {
                            if ($mik == 4 && $Pas != "0"&& strlen($UziniKartasi)>1)
                            {
                                $db->Setall($i,$uyindanOldingiPuli,$Pas,$qaysiligiKartani,$keraklide,$mik,$EngKatta,$yol,$UziniKartasi,$uyinchilar,$pul,$online,$UrtadagiKartalar,$r2[1]);
                                $r2[5]=$keraklide;$r2[13]=$mik;$r2[3]=$yol;
                                $r2[7]=$uyinchilar;$r2[14]=$UziniKartasi;
                                $r2[15]=$EngKatta;$r2[16]=$UrtadagiKartalar;
                                $db->Tugat($i,$r2);
                            }
                            else
                            {
                                // BotsList[i].keraklide++;
                                $db->Setall($i,$uyindanOldingiPuli,$Pas,$qaysiligiKartani,$keraklide,$mik,$EngKatta,$yol,$UziniKartasi,$uyinchilar,$pul,$online,$UrtadagiKartalar,$r2[1]);

                                     if($keraklide==1){ $db->UyinniDAvomEttir($index . str_pad($pul,12,'0',STR_PAD_LEFT) .
                                                str_pad($yol,12,'0',STR_PAD_LEFT) . "$^" .$keraklide . str_pad($r2[1],4,'0',STR_PAD_LEFT) . $mik); }
                            }
                        }
                    }
                }
            else
            {   //1000000000990000000000010$^10220001
                //1000000000990000000000010$^10240001
                if($online == "3" && str_pad($r2[1],4,'0',STR_PAD_LEFT) == substr($data ,strlen($data)-4,4)&& $Pas != "0")
                    {
                        //3000000000980000000000020$^1021010
                        $keraklide = (int)(substr($data,27,1));
                        $keraklide++;

                    if ((int)(substr($data,13,12)) > (int)($EngKatta))
                    {
                        $EngKatta = substr($data,13,12);
                    }
                    if (strpos($data,"&")!==false)
                    {
                        $uyinchilar = str_replace(substr($data,0,1),"",$uyinchilar);
                    }

                    //1000000000450000000000000$^012&30102
                    if($index==(int)substr($data ,strlen($data)-5,1)&&strpos($data,"&")!==false && substr($data,29,1) == "2")
                    {
                        $pul = (string) ((int)($yol) + (int)($pul) + $judgement);
                            $Money = $pul;
                            $uyindanOldingiPuli = 0;

                            $judgement = 0;
                        $db->SetError("pul2=".$pul,32423);

                            $yol = "0";
                            $mik = 0;
                            $keraklide = 0;
                            $Pas = "1";
                            $UziniKartasi = "";
                            $UrtadagiKartalar = "";
                        $db->SetbotlistJudgement($i,$judgement,$groupnumber);

                        $db->Setall($i,$uyindanOldingiPuli,$Pas,$qaysiligiKartani,$keraklide,$mik,$EngKatta,$yol,$UziniKartasi,$uyinchilar,$pul,$online,$UrtadagiKartalar,$r2[1]);
                    }
                    else
                    {
                        $db->Setall($i,$uyindanOldingiPuli,$Pas,$qaysiligiKartani,$keraklide,$mik,$EngKatta,$yol,$UziniKartasi,$uyinchilar,$pul,$online,$UrtadagiKartalar,$r2[1])
                        ;$r2[6]=$online;
                        $r2[5]=$keraklide;
                        $r2[7]=$uyinchilar;
                        $r2[15]=$EngKatta;
                        if($index==(int)substr($data ,strlen($data)-5,1)){$db->Yurish($i, $data,$r2);}
                    }
                    }
                }
           }
        if (strpos($data,"RR")!==false)
        {
            $tr = 0;
            for ($i2 = 0; $i2 < strlen($data); $i2++)
            {
                if ($i2 + 2 < strlen($data) && substr($data,$i2, 2) == "RR")
                {
                    $i2 = $i2 + 30; $tr++;
                }
            }
              $db->RRUchun($tr, $data,$i,$groupnumber);
        }
        if (strlen($data)>5&&substr($data,0, 6) == "TakeiT")
        {$r2=$db->Getall($i,$groupnumber);
            $index=$r2[8];
            $data = str_replace("TakeiT","",$data) ;
            //  print(data+" Takieit");
            if ((string)$index == substr($data,0, 1) && str_pad($r2[1],4,'0',STR_PAD_LEFT) == substr($data,1, 4))
                {
                    $judgement = (int)(substr($data,5, 12));
                    $db->SetbotlistJudgement($i,$judgement,$groupnumber);
                }
        }
    }
    function RRUchun($tr,$datab,$i,$groupnumber)
    {
        $db = new DbOperation();
        $r2=$db->Getall($i,$groupnumber);
        $online=$r2[6];$groupnumber=$r2[1];
        $index=$r2[8];$keraklide=$r2[5];$mik=$r2[13];
        $uyinchilar=$r2[7];$judgement=$r2[12];$pul=$r2[2];$yol=$r2[3];
        $uyindanOldingiPuli=$r2[11];$Pas=$r2[10];$UziniKartasi=$r2[14];
        $EngKatta=$r2[15];$UrtadagiKartalar=$r2[16];$Money=$r2[17];$minstavka=$db->TurnLk((int)$groupnumber);
        for ($t = 0; $t < $tr; $t++)
        {
            $data = substr($datab,$t * strlen($datab) / $tr, strlen($datab)/ $tr);

            if ((string)$index == substr($data,2, 1) &&
            str_pad($groupnumber,4,'0',STR_PAD_LEFT) == substr($data,15, 4))
            {
                // print("32");
                $judgement = 0;
                $pul = (string)((int)($pul) + (int)(substr($data,19, strlen($data)- 19)));
                $Money = $Money +(int)(substr($data,19, strlen($data) - 19));
                //   print("AAAAAA " + BotsList[i].pul);
                $yol = "0";
                $mik = 0;
                $keraklide = 0;
                $Pas = "1";
                $UziniKartasi = "";
                $UrtadagiKartalar = ""; $uyindanOldingiPuli = 0;
                $db->Setall($i,$uyindanOldingiPuli,$Pas,"",$keraklide,$mik,$EngKatta,$yol,$UziniKartasi,$uyinchilar,$pul,$online,$UrtadagiKartalar,$r2[1]);
                $db->SetbotlistJudgement($i,$judgement,$groupnumber);
            }
            else
            {
                if(str_pad($groupnumber,4,'0',STR_PAD_LEFT) == substr($data,15, 4)
                && $Pas == "1" && $online == 3 && $mik == 4 &&
                    (string)$index != substr($data,2, 1) && $tr - 1 == $t)
                {
                    $uyindanOldingiPuli = 0;

                    $mik = 0;

                    if ((int)($r2[2]) < $minstavka)
                    {
                        $db->Chiqishde("Chiqishde".$index.str_pad($groupnumber,4,'0',STR_PAD_LEFT),1);
                        $online = "0";

                        $db->Chiqeuyindanbot($i,$groupnumber);

                     /*   $sql="DELETE FROM botgrouplar WHERE groupnumber = ?  AND id=?   ";
                        $stmt2 = $this->con->prepare($sql);
                        $stmt2->bind_param("ii", $groupnumber,$i);
                        $stmt2->execute();
                        $sql="DELETE FROM botlist WHERE groupnumber = ? AND id=? ";
                        $stmt3 = $this->con->prepare($sql);
                        $stmt3->bind_param("ii", $groupnumber,$i);
                        $stmt3->execute();*/

                    }
                    $db->Setall($i,$uyindanOldingiPuli,$Pas,"",$keraklide,$mik,$EngKatta,$yol,$UziniKartasi,$uyinchilar,$pul,$online,$UrtadagiKartalar,$r2[1]);
                }
            }
        }
    }
    function Yurish($i, $data,$r2)
    {

        $db=new DbOperation();

        $online=$r2[6];$groupnumber=$r2[1];$UrtadagiKartalar=$r2[15];
        $index=$r2[8];$keraklide=$r2[5];$mik=$r2[13];
        $uyinchilar=$r2[7];$judgement=$r2[12];$pul=$r2[2];$yol=$r2[3];
        $uyindanOldingiPuli=$r2[11];$Pas=$r2[10];$UziniKartasi=$r2[14];
        $EngKatta=$r2[15];$minstavka=$db->TurnLk((int)$groupnumber);
        $qaysiligiKartani=$r2[19];
        if ((int)($EngKatta) > (int)($yol))
        {
            //   print("13");
            if ((int)($EngKatta) > $minstavka)
            {  //pas
                //      print("14  mik= " + BotsList[i].mik);
                //st /p1 p2 se sr fl fs
                if ($mik == 0)
                {
                    $db->Tenglashtirish($i,$r2);
                }
                else
                {
                    if ($mik == 1)
                    {

                            $db->Tugat3tali($i,$r2);


                        if ($qaysiligiKartani == "p1" || $qaysiligiKartani == "p2" || $qaysiligiKartani == "se"
                    ||$qaysiligiKartani== "sr" || $qaysiligiKartani == "fl" || $qaysiligiKartani == "fs")
                        {
                            $db->Tenglashtirish($i,$r2);
                        }
                        else
                        {
                            if ((int)($EngKatta) > $minstavka * 3)
                            {

                                if ((int)($pul) + (int)($yol) == 0)
                                {
                                    $db->Tenglashtirish($i,$r2);
                                }
                                else
                                {
                                    $db->Pasaytirish($data, $i,$r2);
                                }
                            }
                            else
                            {
                                $db->Tenglashtirish($i,$r2);
                            }
                        }
                    }
                    else
                    {
                        if ($mik == 2)
                        {

                                $db->Tugat4tali($i,$r2);


                            if ($qaysiligiKartani == "p2" || $qaysiligiKartani == "se"
                        || $qaysiligiKartani == "sr" || $qaysiligiKartani == "fl" || $qaysiligiKartani == "fs")
                            {
                                $db->Tenglashtirish($i,$r2);
                            }
                            else
                            {

                                if ((int)($EngKatta) > $minstavka)
                                {
                                    if ($qaysiligiKartani == "p1" && (int)($EngKatta) > $minstavka* 7)
                                    {
                                        $db->Tenglashtirish($i,$r2);
                                    }
                                    else
                                    {
                                        if ((int)($pul) + (int)($yol) == 0)
                                        {
                                            $db->Tenglashtirish($i,$r2);
                                        }
                                        else
                                        {
                                            $db->Pasaytirish($data, $i,$r2);
                                        }
                                    }
                                }
                                else
                                {
                                    $db->Tenglashtirish($i,$r2);
                                }
                            }
                        }
                        else
                        {
                            if ($mik == 3)
                            {

                                    $db->Tugat5tali($i,$r2);

                                if ($qaysiligiKartani == "se"
                                || $qaysiligiKartani == "sr" || $qaysiligiKartani == "fl" || $qaysiligiKartani == "fs")
                                {
                                    $db->Tenglashtirish($i,$r2);
                                }
                                else
                                {

                                    if ((int)($EngKatta) > $minstavka)
                                    {
                                        if ($qaysiligiKartani == "p1" && (int)($EngKatta) < $minstavka * 6)
                                        {
                                            $db->Tenglashtirish($i,$r2);
                                        }
                                        else
                                        {
                                            if ($qaysiligiKartani == "p2" && (int)($EngKatta) < $minstavka * 8)
                                            {
                                                $db->Tenglashtirish($i,$r2);
                                            }
                                            else
                                            {
                                                if ((int)($pul) + (int)($yol) == 0)
                                                {
                                                    $db->Tenglashtirish($i,$r2);
                                                }
                                                else
                                                {
                                                    $db->Pasaytirish($data, $i,$r2);
                                                    // Tenglashtirish(i);
                                                }
                                            }
                                        }
                                    }
                                    else
                                    {
                                        $db->Tenglashtirish($i,$r2);
                                    }
                                }
                            }
                        }
                    }

                }
            }
            else
            {
                $db->Tenglashtirish($i,$r2);
            }
        }
        else
        {
            //   print("16"); print("14.1" + " " + BotsList[i].pul + " " + BotsList[i].yol);
            //equel;
            // BotsList[i].keraklide++;
            //     print("asd" + BotsList[i].yol + BotsList[i].EngKatta);
            $yol = $EngKatta;
            $db->Setall($i,$uyindanOldingiPuli,$Pas,"",$keraklide,$mik,$EngKatta,$yol,$UziniKartasi,$uyinchilar,$pul,$online,$UrtadagiKartalar,$r2[1]);
            $db->UyinniDAvomEttir($index . str_pad($r2[2],12,'0',STR_PAD_LEFT) .
                str_pad($r2[3],12,'0',STR_PAD_LEFT) . "$^" . $r2[5] . str_pad($r2[1],4,'0',STR_PAD_LEFT) . $r2[13]);
        }
    }
    function Tugat($i,$r2)
    {
        $db=new DbOperation();
        $online=$r2[6];$groupnumber=$r2[1];$UrtadagiKartalar=$r2[15];
        $index=$r2[8];$keraklide=$r2[5];$mik=$r2[13];
        $uyinchilar=$r2[7];$judgement=$r2[12];$pul=$r2[2];$yol=$r2[3];
        $uyindanOldingiPuli=$r2[11];$Pas=$r2[10];$UziniKartasi=$r2[14];
        $EngKatta=$r2[15];$minstavka=$db->TurnLk((int)$groupnumber);
        $qaysiligiKartani=$r2[19];
        $den = $UziniKartasi . $UrtadagiKartalar;
        $kino = array(); $kino[0] = 213312;
        $kino[1] = (int)(substr($den,2, 2));
        $m = 0; $m7 = 0;$m3 = 0; $m4 = 0;
        $kino[2] = (int)(substr($den,6, 2));
        $kino[3] = (int)(substr($den,10, 2));
        $kino[4] = (int)(substr($den,14, 2));
        $kino[5] = (int)(substr($den,18, 2));
        $kino[6] = (int)(substr($den,22, 2));
        $kino[7] = (int)(substr($den,26, 2));

        $Nihoyat = "RR" . $index;
        $bhu = "";
        if ($kino[1] >= $kino[2])
        {
            $bhu = "st" . substr($den,2, 2);
        }
        else
        {
            $bhu = "st" . substr($den,6, 2);
        }

        //para
        for ($n = 1; $n <= 6; $n++)
        {
            if ($kino[1] == (int)(substr($den,$n * 4 + 2, 2)))
            {
                $bhu = "p1" . $kino[1]; $m++; $m3 = $kino[1];
            }
        }
        for ($n = 2; $n <= 6; $n++)
        {
            if ($kino[2] == (int)(substr($den,$n * 4 + 2, 2)))
            {
                $bhu = "p1" . $kino[2]; $m7++; $m4 = $kino[2];
            }
        }


        //2para
        if ($m7 == 1 && $m == 1)
        {
            $bhu = "p2"; if ($m3 < $m4) { $bhu = $bhu . $m4; } else { $bhu = $bhu . $m3; }
        }

        //set
        if ($m == 2 || $m7 == 2)
        {
            $bhu = "se"; if ($m3 < $m4) { $bhu = $bhu . $m4; } else { $bhu = $bhu . $m3; }
        }

        //strit //den=sp14di16|||he23sp19cl21di12he22
        $asd = "";
        for ($i = 1; $i < 8; $i++)
        {
            $asd = $asd . "|" . $kino[$i];
        }
        for ($i = 11; $i < 19; $i++)
        {
            if (strpos($asd,(string)$i)!==false)
            {
                if (strpos($asd,(string)($i+1))!==false)
                {
                    if (strpos($asd,(string)($i+2))!==false)
                    {
                        if (strpos($asd,(string)($i+3))!==false)
                        {
                            if (strpos($asd,(string)($i+4))!==false)
                            {
                                $bhu = "sr" . (string)($i + 4);
                            }
                        }
                    }
                }
            }
        }
        //den=sp14di16|||he23sp19cl21di12he22
        //Flesh
        $m7 = 0; $mm = 0;
        for ($i = 1; $i < 7; $i++)
        {
            if (substr($den,0, 2) == substr($den,4 * $i, 2))
            {
                $m7++; if ($m7 == 4)
            {
                $bhu = "fl" . substr($den,2, 2);
            }
            }
        }
        for ($i1 = 2; $i1 < 7; $i1++)
        {
            if (substr($den,4, 2) == substr($den,4 * $i1, 2))
            {
                $mm++; if ($mm == 4)
            {
                $bhu = "fl" . substr($den,6, 2);

            }
            }
        }
        if ($m7 == 4 && $mm == 4)
        {
            if ((int)(substr($den,2, 2)) > (int)(substr($den,6, 2))) { $bhu = "fl" . substr($den,2, 2); } else { $bhu = "fl" . substr($den,6, 2); }
        }


        //FullHouse
        $m7 = 0; $m3 = 0; $m4 = 0; $m = 0;
        $kino[1] = (int)(substr($den,2, 2));
        $kino[2] = (int)(substr($den,6, 2));
        $kino[3] = (int)(substr($den,10, 2));
        $kino[4] = (int)(substr($den,14, 2));
        $kino[5] = (int)(substr($den,18, 2));
        $kino[6] = (int)(substr($den,22, 2));
        $kino[7] = (int)(substr($den,26, 2));

        for ($i = 1; $i < 8; $i++)
        {
            $m7 = 0; for ($i2 = 1; $i2 < 8; $i2++)
            {
                if ($i != $i2)
                {
                    if ($kino[$i] == $kino[$i2])
                    {

                        $m7++;
                        if ($m7 == 2)
                        {
                            $m3 = $kino[$i];
                        }
                    }
                }
            }
        }
        for ($i = 1; $i < 8; $i++)
        {
            $m4 = 0;
            if ($kino[$i] != $m3)
            {
                for ($i2 = 1; $i2 < 8; $i2++)
                {
                    if ($i != $i2)
                    {
                        if ($kino[$i] == $kino[$i2])
                        {
                            $m4++;
                            if ($m4 == 1) { $m = $kino[$i]; }
                        }
                    }
                }
            }

        }
        if ($m3 != 0 && $m != 0)
        {
            if ($m3 == $kino[1] || $m3 == $kino[2])
            {
                $bhu = "fs" .$m3;
            }
            if ($m == $kino[1] || $m == $kino[2])
            {
                $bhu = "fs" . $m;
            }
            if (($m3 == $kino[1] || $m3 == $kino[2]) && ($m == $kino[1] || $m == $kino[2]))
            {
                if ($m3 >= $m)
                {
                    $bhu = "fs" . $m3;
                }
                else
                {
                    $bhu = "fs" . $m;
                }
            }

            if (($kino[1] >= $kino[2]) && ($kino[1] == $m || $kino[1] == $m3))
            {
                $bhu = "fs" . $kino[1];
            }
            else
            {
                if ( ($kino[1] != $m || $kino[1] != $m3))
                {
                    $bhu = "fs" . $kino[2];
                }
                else
                {
                    if (($kino[2] >= $kino[1]) && ($kino[2] == $m || $kino[2] == $m3))
                    {
                        $bhu = "fs" . $kino[2];
                    }
                    else
                    {
                        $bhu = "fs" . $kino[1];
                    }
                }
            }
        }
          $Nihoyat = $Nihoyat . $bhu . substr($den,0, 8);
        $db->RRniKiritish($Nihoyat . str_pad((string)($r2[1]),4,'0',STR_PAD_LEFT) . "000000000000");
    }
    function Tugat3tali($i,$r2)
    {
        $db=new DbOperation();
        $online=$r2[6];$groupnumber=$r2[1];$UrtadagiKartalar=$r2[15];
        $index=$r2[8];$keraklide=$r2[5];$mik=$r2[13];
        $uyinchilar=$r2[7];$judgement=$r2[12];$pul=$r2[2];$yol=$r2[3];
        $uyindanOldingiPuli=$r2[11];$Pas=$r2[10];$UziniKartasi=$r2[14];
        $EngKatta=$r2[14];$minstavka=$db->TurnLk((int)$groupnumber);
        $qaysiligiKartani=$r2[19];
        $den = $UziniKartasi . substr($UrtadagiKartalar,0,12);

        $kino = array(); $kino[0] = 213312;
        $m = 0; $m7 = 0;$m3 = 0; $m4 = 0;
        $kino[1] = (int)(substr($den,2, 2));
        $kino[2] = (int)(substr($den,6, 2));
        $kino[3] = (int)(substr($den,10, 2));
        $kino[4] = (int)(substr($den,14, 2));
        $kino[5] = (int)(substr($den,18, 2));
        //   kino[6] = int.Parse(den.Substring(22, 2));
        //   kino[7] = int.Parse(den.Substring(26, 2));

     //   String Nihoyat = "RR" + BotsList[xp].Index;
        $bhu = "";
        if ($kino[1] >= $kino[2])
        {
            $qaysiligiKartani = "st";
        }
        else
        {
            $qaysiligiKartani = "st";
        }

        //para
        for ($n = 1; $n <= 4; $n++)
        {
            if ($kino[1] == (int)(substr($den,$n * 4 + 2, 2)))
            {
                $qaysiligiKartani = "p1" ; $m++; $m3 = $kino[1];
            }
        }
        for ($n = 2; $n <= 4; $n++)
        {
            if ($kino[2] == (int)(substr($den,$n * 4 + 2, 2)))
            {
                $qaysiligiKartani = "p1" ; $m7++; $m4 = $kino[2];
            }
        }


        //2para
        if ($m7 == 1 && $m == 1)
        {
            $qaysiligiKartani = "p2"; if ($m3 < $m4) { $bhu = $bhu . $m4; } else { $bhu = $bhu . $m3; }
        }

        //set
        if ($m == 2 || $m7 == 2)
        {
            $qaysiligiKartani = "se"; if ($m3 < $m4) { $bhu = $bhu . $m4; } else { $bhu = $bhu . $m3; }
        }

        //strit //den=sp14di16|||he23sp19cl21di12he22
        $asd = "";
        for ($i = 1; $i < 6; $i++)
        {
            $asd = $asd . "|" . $kino[$i];
        }
        for ($i = 11; $i < 17; $i++)
        {
            if (strpos($asd,(string)$i)!==false)
            {
                if (strpos($asd,(string)($i+1))!==false)
                {
                    if (strpos($asd,(string)($i+2))!==false)
                    {
                        if (strpos($asd,(string)($i+3))!==false)
                        {
                            if (strpos($asd,(string)($i+4))!==false)
                            {
                                $qaysiligiKartani = "sr" ;
                            }
                        }
                    }
                }
            }
        }
        //den=sp14di16|||he23sp19cl21di12he22
        //Flesh
        $m7 = 0; $mm = 0;
        for ($i = 1; $i < 5; $i++)
        {
            if (substr($den,0, 2) == substr($den,4 * $i, 2))
            {
                $m7++; if ($m7 == 4)
            {
                $qaysiligiKartani = "fl" ;
            }
            }
        }
        for ($i1 = 2; $i1 < 5; $i1++)
        {
            if (substr($den,4, 2) == substr($den,4 * $i1, 2))
            {
                $mm++; if ($mm == 4)
            {
                $qaysiligiKartani = "fl";

              }
            }
        }
        if ($m7 == 4 && $mm == 4)
        {
            if ((int)(substr($den,2, 2)) > (int)(substr($den,6, 2))) { $qaysiligiKartani = "fl"; } else { $qaysiligiKartani = "fl" ; }
        }

        //FullHouse
        $m7 = 0; $m3 = 0; $m4 = 0; $m = 0;
        $kino[1] = (int)(substr($den,2, 2));
        $kino[2] = (int)(substr($den,6, 2));
        $kino[3] = (int)(substr($den,10, 2));
        $kino[4] = (int)(substr($den,14, 2));
        $kino[5] = (int)(substr($den,18, 2));
        //  kino[6] = int.Parse(den.Substring(22, 2));
        //  kino[7] = int.Parse(den.Substring(26, 2));

        for ($i = 1; $i < 6; $i++)
        {
            $m7 = 0; for ($i2 = 1; $i2 < 6; $i2++)
           {
            if ($i != $i2)
            {
                if ($kino[$i] == $kino[$i2])
                {
                    $m7++;
                    if ($m7 == 2)
                    {
                        $m3 = $kino[$i];
                    }
                  }
               }
           }
        }
        for ($i = 1; $i < 6; $i++)
        {
            $m4 = 0;
            if ($kino[$i] != $m3)
            {
                for ($i2 = 1; $i2 < 6; $i2++)
                {
                    if ($i != $i2)
                    {
                        if ($kino[$i] == $kino[$i2])
                        {
                            $m4++;
                            if ($m4 == 1) { $m = $kino[$i]; }
                        }
                    }
                }
            }
        }
        if ($m3 != 0 && $m != 0)
        {
            if ($m3 == $kino[1] || $m3 == $kino[2])
            {
                $qaysiligiKartani = "fs";
            }
            if ($m == $kino[1] || $m == $kino[2])
            {
                $qaysiligiKartani = "fs";
            }
            if (($m3 == $kino[1] || $m3 == $kino[2]) && ($m == $kino[1] || $m == $kino[2]))
            {
                if ($m3 >= $m)
                {
                    $qaysiligiKartani = "fs";
                }
                else
                {
                    $qaysiligiKartani = "fs";
                }
            }
            if ($m3 != $kino[1] || $m3 != $kino[2] || $m != $kino[1] || $m != $kino[2])
            {
                if ($kino[1] >= $kino[2]) { $qaysiligiKartani = "fs"; } else { $qaysiligiKartani = "fs"; }
            }
        }
        $db->Setall($i,$uyindanOldingiPuli,$Pas,$qaysiligiKartani,$keraklide,$mik,$EngKatta,$yol,$UziniKartasi,$uyinchilar,$pul,$online,$UrtadagiKartalar,$r2[1]);
    }
    function Tugat4tali($i,$r2)
    {

        $db=new DbOperation();
        $online=$r2[6];$groupnumber=$r2[1];$UrtadagiKartalar=$r2[15];
        $index=$r2[8];$keraklide=$r2[5];$mik=$r2[13];
        $uyinchilar=$r2[7];$judgement=$r2[12];$pul=$r2[2];$yol=$r2[3];
        $uyindanOldingiPuli=$r2[11];$Pas=$r2[10];$UziniKartasi=$r2[14];
        $EngKatta=$r2[15];$minstavka=$db->TurnLk((int)$groupnumber);
        $qaysiligiKartani=$r2[19];
        $den = $UziniKartasi . substr($UrtadagiKartalar,0,16);
        $kino = array(); $kino[0] = 213312;
        $m = 0; $m7 = 0;$m3 = 0; $m4 = 0;
        $kino[1] = (int)(substr($den,2, 2));
        $kino[2] = (int)(substr($den,6, 2));
        $kino[3] = (int)(substr($den,10, 2));
        $kino[4] = (int)(substr($den,14, 2));
        $kino[5] = (int)(substr($den,18, 2));
        $kino[6] = (int)(substr($den,22, 2));
        //   kino[7] = int.Parse(den.Substring(26, 2));

     //   String Nihoyat = "RR" + BotsList[xp].Index;
        $bhu = "";
        if ($kino[1] >= $kino[2])
        {
            $qaysiligiKartani = "st";
        }
        else
        {
            $qaysiligiKartani = "st";
        }


        //para
        for ($n = 1; $n <= 5; $n++)
        {
            if ($kino[1] == (int)(substr($den,$n * 4 + 2, 2)))
            {
                $qaysiligiKartani = "p1" ; $m++; $m3 = $kino[1];
            }
        }
        for ($n = 2; $n <= 5; $n++)
        {
            if ($kino[2] == (int)(substr($den,$n * 4 + 2, 2)))
            {
                $qaysiligiKartani = "p1" ; $m7++; $m4 = $kino[2];
            }
        }



        //2para
        if ($m7 == 1 && $m == 1)
        {
            $qaysiligiKartani = "p2"; if ($m3 < $m4) { $bhu = $bhu . $m4; } else { $bhu = $bhu . $m3; }
        }

        //set
        if ($m == 2 || $m7 == 2)
        {
            $qaysiligiKartani = "se"; if ($m3 < $m4) { $bhu = $bhu . $m4; } else { $bhu = $bhu . $m3; }
        }


        //strit //den=sp14di16|||he23sp19cl21di12he22
        $asd = "";
        for ($i = 1; $i < 7; $i++)
        {
            $asd = $asd . "|" . $kino[$i];
        }
        for ($i = 11; $i < 18; $i++)
        {
            if (strpos($asd,(string)$i)!==false)
            {
                if (strpos($asd,(string)($i+1))!==false)
                {
                    if (strpos($asd,(string)($i+2))!==false)
                    {
                        if (strpos($asd,(string)($i+3))!==false)
                        {
                            if (strpos($asd,(string)($i+4))!==false)
                            {
                                $qaysiligiKartani = "sr" ;
                            }
                        }
                    }
                }
            }
        }
        //den=sp14di16|||he23sp19cl21di12he22
        //Flesh
        $m7 = 0; $mm = 0;
        for ($i = 1; $i < 6; $i++)
        {
            if (substr($den,0, 2) == substr($den,4 * $i, 2))
            {
                $m7++; if ($m7 == 4)
            {
                $qaysiligiKartani = "fl" ;
            }
            }
        }
        for ($i1 = 2; $i1 < 6; $i1++)
        {
            if (substr($den,4, 2) == substr($den,4 * $i1, 2))
            {
                $mm++; if ($mm == 4)
            {
                $qaysiligiKartani = "fl";

            }
            }
        }
        if ($m7 == 4 && $mm == 4)
        {
            if ((int)(substr($den,2, 2)) > (int)(substr($den,6, 2))) { $qaysiligiKartani = "fl"; } else { $qaysiligiKartani = "fl" ; }
        }


        //FullHouse
        $m7 = 0; $m3 = 0; $m4 = 0; $m = 0;
        $kino[1] = (int)(substr($den,2, 2));
        $kino[2] = (int)(substr($den,6, 2));
        $kino[3] = (int)(substr($den,10, 2));
        $kino[4] = (int)(substr($den,14, 2));
        $kino[5] = (int)(substr($den,18, 2));
        $kino[6] = (int)(substr($den,22, 2));
        //  kino[7] = int.Parse(den.Substring(26, 2));

        for ($i = 1; $i < 7; $i++)
        {
            $m7 = 0; for ($i2 = 1; $i2 < 7; $i2++)
        {
            if ($i != $i2)
            {
                if ($kino[$i] == $kino[$i2])
                {
                    $m7++;
                    if ($m7 == 2)
                    {
                        $m3 = $kino[$i];
                    }
                }
            }
        }
        }
        for ($i = 1; $i < 7; $i++)
        {
            $m4 = 0;
            if ($kino[$i] != $m3)
            {
                for ($i2 = 1; $i2 < 7; $i2++)
                {
                    if ($i != $i2)
                    {
                        if ($kino[$i] == $kino[$i2])
                        {
                            $m4++;
                            if ($m4 == 1) { $m = $kino[$i]; }
                        }
                    }
                }
            }
        }
        if ($m3 != 0 && $m != 0)
        {
            if ($m3 == $kino[1] || $m3 == $kino[2])
            {
                $qaysiligiKartani = "fs";
            }
            if ($m == $kino[1] || $m == $kino[2])
            {
                $qaysiligiKartani = "fs";
            }
            if (($m3 == $kino[1] || $m3 == $kino[2]) && ($m == $kino[1] || $m == $kino[2]))
            {
                if ($m3 >= $m)
                {
                    $qaysiligiKartani = "fs";
                }
                else
                {
                    $qaysiligiKartani = "fs";
                }
            }
            if ($m3 != $kino[1] || $m3 != $kino[2] || $m != $kino[1] || $m != $kino[2])
            {
                if ($kino[1] >= $kino[2]) { $qaysiligiKartani = "fs"; } else { $qaysiligiKartani = "fs"; }
            }
        }
        $db->Setall($i,$uyindanOldingiPuli,$Pas,$qaysiligiKartani,$keraklide,$mik,$EngKatta,$yol,$UziniKartasi,$uyinchilar,$pul,$online,$UrtadagiKartalar,$r2[1]);
    }
    function Tugat5tali($i,$r2)
    {
        $db=new DbOperation();
        $online=$r2[6];$groupnumber=$r2[1];$UrtadagiKartalar=$r2[15];
        $index=$r2[8];$keraklide=$r2[5];$mik=$r2[13];
        $uyinchilar=$r2[7];$judgement=$r2[12];$pul=$r2[2];$yol=$r2[3];
        $uyindanOldingiPuli=$r2[11];$Pas=$r2[10];$UziniKartasi=$r2[14];
        $EngKatta=$r2[15];$minstavka=$db->TurnLk((int)$groupnumber);
        $qaysiligiKartani=$r2[19];
        $den = $UziniKartasi . $UrtadagiKartalar;
        $kino = array(); $kino[0] = 213312;
        $m = 0; $m7 = 0;$m3 = 0; $m4 = 0;
        $kino[1] = (int)(substr($den,2, 2));
        $kino[2] = (int)(substr($den,6, 2));
        $kino[3] = (int)(substr($den,10, 2));
        $kino[4] = (int)(substr($den,14, 2));
        $kino[5] = (int)(substr($den,18, 2));
        $kino[6] = (int)(substr($den,22, 2));
        $kino[7] = (int)(substr($den,26, 2));

      //  String Nihoyat = "RR" + BotsList[xp].Index;
        $bhu = "";
        if ($kino[1] >= $kino[2])
        {
            $qaysiligiKartani = "st";
        }
        else
        {
            $qaysiligiKartani = "st";
        }



        //para
        for ($n = 1; $n <= 6; $n++)
        {
            if ($kino[1] == (int)(substr($den,$n * 4 + 2, 2)))
            {
                $qaysiligiKartani = "p1" ; $m++; $m3 = $kino[1];
            }
        }
        for ($n = 2; $n <= 6; $n++)
        {
            if ($kino[2] == (int)(substr($den,$n * 4 + 2, 2)))
            {
                $qaysiligiKartani = "p1" ; $m7++; $m4 = $kino[2];
            }
        }


        //2para
        if ($m7 == 1 && $m == 1)
        {
            $qaysiligiKartani = "p2"; if ($m3 < $m4) { $bhu = $bhu . $m4; } else { $bhu = $bhu . $m3; }
        }

        //set
        if ($m == 2 || $m7 == 2)
        {
            $qaysiligiKartani = "se"; if ($m3 < $m4) { $bhu = $bhu . $m4; } else { $bhu = $bhu . $m3; }
        }

        //strit //den=sp14di16|||he23sp19cl21di12he22
        $asd = "";
        for ($i = 1; $i < 8; $i++)
        {
            $asd = $asd . "|" . $kino[$i];
        }
        for ($i = 11; $i < 19; $i++)
        {
            if (strpos($asd,(string)$i)!==false)
            {
                if (strpos($asd,(string)($i+1))!==false)
                {
                    if (strpos($asd,(string)($i+2))!==false)
                    {
                        if (strpos($asd,(string)($i+3))!==false)
                        {
                            if (strpos($asd,(string)($i+4))!==false)
                            {
                                $qaysiligiKartani = "sr" ;
                            }
                        }
                    }
                }
            }
        }
        //den=sp14di16|||he23sp19cl21di12he22
        //Flesh
        $m7 = 0; $mm = 0;
        for ($i = 1; $i < 7; $i++)
        {
            if (substr($den,0, 2) == substr($den,4 * $i, 2))
            {
                $m7++; if ($m7 == 4)
            {
                $qaysiligiKartani = "fl" ;
            }
            }
        }
        for ($i1 = 2; $i1 < 7; $i1++)
        {
            if (substr($den,4, 2) == substr($den,4 * $i1, 2))
            {
                $mm++; if ($mm == 4)
            {
                $qaysiligiKartani = "fl";

            }
            }
        }
        if ($m7 == 4 && $mm == 4)
        {
            if ((int)(substr($den,2, 2)) > (int)(substr($den,6, 2))) { $qaysiligiKartani = "fl"; } else { $qaysiligiKartani = "fl" ; }
        }


        //FullHouse
        $m7 = 0; $m3 = 0; $m4 = 0; $m = 0;
        $kino[1] = (int)(substr($den,2, 2));
        $kino[2] = (int)(substr($den,6, 2));
        $kino[3] = (int)(substr($den,10, 2));
        $kino[4] = (int)(substr($den,14, 2));
        $kino[5] = (int)(substr($den,18, 2));
        $kino[6] = (int)(substr($den,22, 2));
        $kino[7] = (int)(substr($den,26, 2));

        for ($i = 1; $i < 8; $i++)
        {
            $m7 = 0; for ($i2 = 1; $i2 < 8; $i2++)
        {
            if ($i != $i2)
            {
                if ($kino[$i] == $kino[$i2])
                {
                    $m7++;
                    if ($m7 == 2)
                    {
                        $m3 = $kino[$i];
                    }
                }
            }
        }
        }
        for ($i = 1; $i < 8; $i++)
        {
            $m4 = 0;
            if ($kino[$i] != $m3)
            {
                for ($i2 = 1; $i2 < 8; $i2++)
                {
                    if ($i != $i2)
                    {
                        if ($kino[$i] == $kino[$i2])
                        {
                            $m4++;
                            if ($m4 == 1) { $m = $kino[$i]; }
                        }
                    }
                }
            }
        }
        if ($m3 != 0 && $m != 0)
        {
            if ($m3 == $kino[1] || $m3 == $kino[2])
            {
                $qaysiligiKartani = "fs";
            }
            if ($m == $kino[1] || $m == $kino[2])
            {
                $qaysiligiKartani = "fs";
            }
            if (($m3 == $kino[1] || $m3 == $kino[2]) && ($m == $kino[1] || $m == $kino[2]))
            {
                if ($m3 >= $m)
                {
                    $qaysiligiKartani = "fs";
                }
                else
                {
                    $qaysiligiKartani = "fs";
                }
            }
            if ($m3 != $kino[1] || $m3 != $kino[2] || $m != $kino[1] || $m != $kino[2])
            {
                if ($kino[1] >= $kino[2]) { $qaysiligiKartani = "fs"; } else { $qaysiligiKartani = "fs"; }
            }
        }
        $db->Setall($i,$uyindanOldingiPuli,$Pas,$qaysiligiKartani,$keraklide,$mik,$EngKatta,$yol,$UziniKartasi,$uyinchilar,$pul,$online,$UrtadagiKartalar,$r2[1]);

    }
    function Tenglashtirish($i,$r2)
    {  $db=new DbOperation();
        $online=$r2[6];$groupnumber=$r2[1];$UrtadagiKartalar=$r2[15];
        $index=$r2[8];$keraklide=$r2[5];$mik=$r2[13];
        $uyinchilar=$r2[7];$judgement=$r2[12];$pul=$r2[2];$yol=$r2[3];
        $uyindanOldingiPuli=$r2[11];$Pas=$r2[10];$UziniKartasi=$r2[14];
        $EngKatta=$r2[15];$minstavka=$db->TurnLk((int)$groupnumber);
        $qaysiligiKartani=$r2[19];
        //   print("14.1" + " " + BotsList[i].pul + " " + BotsList[i].yol);
        $t =( int)($EngKatta) - ( int)($yol);
        if (( int)($pul) + ( int)($yol) < ( int)($EngKatta))
        {
            $yol =(string)((int)($pul) + ( int)($yol));
            $t = ( int)($pul);
        }
        else
        {
            $t = ( int)($EngKatta)  - ( int)($yol) ;
            $yol = $EngKatta;
        }
        $pul = (string)((int)($pul)- $t);
        $Money = $pul;
        //  print("14 money" + BotsList[i].Money + " index=" + BotsList[i].Index);
        $db->Setall($i,$uyindanOldingiPuli,$Pas,"",$keraklide,$mik,$EngKatta,$yol,$UziniKartasi,$uyinchilar,$pul,$online,$UrtadagiKartalar,$r2[1]);
        $db->UyinniDAvomEttir($index . str_pad($pul,12,'0',STR_PAD_LEFT) .
            str_pad($yol,12,'0',STR_PAD_LEFT) . "$^" .$keraklide . str_pad($groupnumber,4,'0',STR_PAD_LEFT) . $mik);
    }
    function Pasaytirish($data, $i,$r2)
    {  $db=new DbOperation();
        $online=$r2[6];$groupnumber=$r2[1];$UrtadagiKartalar=$r2[15];
        $index=$r2[8];$keraklide=$r2[5];$mik=$r2[13];
        $uyinchilar=$r2[7];$judgement=$r2[12];$pul=$r2[2];$yol=$r2[3];
        $uyindanOldingiPuli=$r2[11];$Pas=$r2[10];$UziniKartasi=$r2[14];
        $EngKatta=$r2[15];$minstavka=$db->TurnLk((int)$groupnumber);
        $qaysiligiKartani=$r2[19];
        if (strlen($data) > 28 && substr($data,29,1) == "2") { $keraklide = 0; }
        $Pas = "0";
        // BotsList[i].pul = (int.Parse(BotsList[i].pul) - int.Parse(BotsList[i].yol)).ToString();
        $db->UyinniDAvomEttir($index . str_pad($pul,12,'0',STR_PAD_LEFT) .
            str_pad($yol,12,'0',STR_PAD_LEFT) . "$^" .$keraklide . str_pad($groupnumber,4,'0',STR_PAD_LEFT) . $mik."&");

        $yol = "0";

        if ((int)($pul) < $minstavka)
        {
                        $db->Chiqishde("Chiqishde".$index.str_pad($groupnumber,4,'0',STR_PAD_LEFT),1);

            $online = "0";

        }
          $db->Setall($i,$uyindanOldingiPuli,$Pas,"",$keraklide,$mik,$EngKatta,$yol,$UziniKartasi,$uyinchilar,$pul,$online,$UrtadagiKartalar,$r2[1]);

    }
    function ChooisePul($stol)
    {  $ds=array();
        if ($stol > 0) { $ds[0] = "100"; $ds[1]= "100"; }
        if ($stol > 100) { $ds[0] = "500"; $ds[1] = "500"; }
        if ($stol > 200) { $ds[0] = "2000"; $ds[1] = "2000"; }
        if ($stol > 300) { $ds[0] = "10000";$ds[1] = "10000"; }
        if ($stol > 400) { $ds[0] = "40000"; $ds[1]= "40000"; }
        if ($stol > 500) { $ds[0] = "200000"; $ds[1] = "200000"; }
        if ($stol > 600) { $ds[0] = "1000000"; $ds[1] = "1000000"; }
        if ($stol > 700) { $ds[0] = "5000000"; $ds[1] = "5000000"; }
        if ($stol > 800) { $ds[0] = "10000000"; $ds[1] = "10000000"; }
        if ($stol > 900) { $ds[0]= "100000000"; $ds[1]= "100000000"; }
        if ($stol > 1000) { $ds[0] = "200000000"; $ds[1]= "200000000"; }
        if ($stol > 1100) { $ds[0] = "400000000"; $ds[1] = "400000000"; }
        if ($stol > 1200) { $ds[0] = "1000000000"; $ds[1] = "1000000000"; }
        if ($stol > 1300) { $ds[0] = "20000000000"; $ds[1] = "20000000000"; }
        if ($stol > 1400) { $ds[0] = "5000000"; $ds[1] = "5000000"; }
        if ($stol > 1500) { $ds[0] = "10000000"; $ds[1]= "10000000"; }
        if ($stol > 1600) { $ds[0] = "100000000"; $ds[1] = "100000000"; }
        if ($stol > 1700) { $ds[0] = "200000000"; $ds[1]= "200000000"; }
        if ($stol > 1800) { $ds[0] = "400000000"; $ds[1] = "400000000"; }
        if ($stol > 1900) { $ds[0] = "1000000000"; $ds[1] = "1000000000"; }
        if ($stol > 2000) { $ds[0] = "2000000000"; $ds[1] = "2000000000"; }
        //turnir
        if ($stol > 2100) { $ds[0] = "1000"; $ds[1] = "1000"; }
        if ($stol > 2200) { $ds[0] = "1000"; $ds[1]= "1000"; }
        if ($stol > 2300) { $ds[0] = "1000"; $ds[1]= "1000"; }
        if ($stol > 2400) { $ds[0] = "1000"; $ds[1]= "1000"; }
        if ($stol > 2500) { $ds[0] = "1000"; $ds[1]= "1000"; }
        if ($stol > 2600) { $ds[0] = "1000"; $ds[1] = "1000"; }
        if ($stol > 2700) { $ds[0] = "1000"; $ds[1] = "1000"; }
        if ($stol > 2800) { $ds[0] = "1000"; $ds[1]= "1000"; }
        //3
        if ($stol > 2900) { $ds[0] = "1000"; $ds[1]= "1000"; }
        if ($stol > 3000) { $ds[0] = "1000"; $ds[1] = "1000"; }
        if ($stol > 3100) { $ds[0] = "1000"; $ds[1] = "1000"; }
        return $ds;

    }
}