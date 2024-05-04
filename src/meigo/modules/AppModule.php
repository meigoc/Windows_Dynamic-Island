<?php
namespace meigo\modules;

use std, gui, framework, meigo;


class AppModule extends AbstractModule
{

    /**
     * @event construct 
     */
    function doConstruct(ScriptEvent $e = null)
    {    
        echo "[meigo] Wait... The program initialization process is in progress.\n";
    }

    /**
     * @event action 
     */
    function doAction(ScriptEvent $e = null)
    {    
        // Инициализация
        echo "[INFO] Initialization: start\n";
        echo "[INFO] Loading basic information about program...\n";
        echo "[INFO] -- Debug log:\n";
        echo "[INFO]    InstanceID: ".app()->getInstanceId()."\n";
        echo "[INFO]    UUID: ".app()->getConfig()->get("app.uuid")."\n";
        echo "[INFO]    Registered publisher of the app: ".app()->getConfig()->get("app.namespace")."\n";
        echo "[INFO]    App Name: ".app()->getConfig()->get("app.name")."\n";
        echo "[INFO]    StartTime: ".app()->getStartTime()."\n";
        echo "[INFO] -- Loading app:\n";
        
    }

}
