<?php
 
    namespace HZSystem\Core;
 
    class HZLogger {
        
        //Errors level
        const LOG_FATAL =   404;
        const LOG_ERROR =   403;
        const LOG_WARNING = 402;
        const LOG_INFO =    401;
        const LOG_DEBUG =   400;

        //Appenders
 
    private $logfile;
    private $loglevel;
    private $date_format;
    private $logfile_basename;
    private $logfile_basedir;
    
    public static $_instace = array();
            
    public static function getLogger($logfile){
        
        if (!(self::$_instace[$logfile] instanceof self)){
            self::$_instace[$logfile] = new self($logfile);
        }
        
        return self::$_instace[$logfile];
    }
    
    public function __construct($logfile){
   
      $this->logfile_basedir = "log";
      $this->logfile_basename = $logfile;
      $this->logfile = $this->logfile_basedir."/".$this->logfile_basename."_".date("dmY").".log";
      $this->loglevel = self::LOG_INFO;
      $this->date_format = "d-m-Y H:m:s";
      
    }
  
    public function setLogLevel($level){
   
      $this->loglevel = $level;
    }

    public function setDateFormat($date_format){
   
      $this->date_format = $date_format;
    }
   
    public function append($level, $msg){
     
      if ($level<=$this->loglevel)
        error_log(date($this->date_format).' --> '.$msg."\n",3,$this->logfile);
    }
   
    public function error($msg){
      if ($this->loglevel>=constant("LOG_ERROR"))
        error_log(date($this->date_format).' --> '.$msg."\n",3,$this->logfile);
    }
   
    public function warning($msg){
      if ($this->loglevel>=constant("LOG_WARNING"))
        error_log(date($this->date_format).' --> '.$msg."\n",3,$this->logfile);
    }

    public function info($msg){
      if ($this->loglevel>=constant("LOG_INFO"))
        error_log(date($this->date_format).' --> '.$msg."\n",3,$this->logfile);
    }
   
    public function debug($msg){
      if ($this->loglevel>=constant("LOG_DEBUG"))
        error_log(date($this->date_format).' --> '.$msg."\n",$this->log_type,$this->logfile);
    }
   
   
   
  }
?> 