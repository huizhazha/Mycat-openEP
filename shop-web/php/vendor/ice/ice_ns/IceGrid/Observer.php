<?php
// **********************************************************************
//
// Copyright (c) 2003-2013 ZeroC, Inc. All rights reserved.
//
// This copy of Ice is licensed to you under the terms described in the
// ICE_LICENSE file included in this distribution.
//
// **********************************************************************
//
// Ice version 3.5.1
//
// <auto-generated>
//
// Generated from file `Observer.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace
{
    require_once 'Glacier2/Session.php';
    require_once 'IceGrid/Exception.php';
    require_once 'IceGrid/Descriptor.php';
    require_once 'IceGrid/Admin.php';
}

namespace IceGrid
{
    if(!class_exists('\\IceGrid\\ServerDynamicInfo'))
    {
        class ServerDynamicInfo
        {
            public function __construct($id='', $state=\IceGrid\ServerState::Inactive, $pid=0, $enabled=false)
            {
                $this->id = $id;
                $this->state = $state;
                $this->pid = $pid;
                $this->enabled = $enabled;
            }

            public function __toString()
            {
                global $IceGrid__t_ServerDynamicInfo;
                return IcePHP_stringify($this, $IceGrid__t_ServerDynamicInfo);
            }

            public $id;
            public $state;
            public $pid;
            public $enabled;
        }

        $IceGrid__t_ServerDynamicInfo = IcePHP_defineStruct('::IceGrid::ServerDynamicInfo', '\\IceGrid\\ServerDynamicInfo', array(
            array('id', $IcePHP__t_string), 
            array('state', $IceGrid__t_ServerState), 
            array('pid', $IcePHP__t_int), 
            array('enabled', $IcePHP__t_bool)));
    }
}

namespace IceGrid
{
    if(!isset($IceGrid__t_ServerDynamicInfoSeq))
    {
        $IceGrid__t_ServerDynamicInfoSeq = IcePHP_defineSequence('::IceGrid::ServerDynamicInfoSeq', $IceGrid__t_ServerDynamicInfo);
    }
}

namespace IceGrid
{
    if(!class_exists('\\IceGrid\\AdapterDynamicInfo'))
    {
        class AdapterDynamicInfo
        {
            public function __construct($id='', $proxy=null)
            {
                $this->id = $id;
                $this->proxy = $proxy;
            }

            public function __toString()
            {
                global $IceGrid__t_AdapterDynamicInfo;
                return IcePHP_stringify($this, $IceGrid__t_AdapterDynamicInfo);
            }

            public $id;
            public $proxy;
        }

        $IceGrid__t_AdapterDynamicInfo = IcePHP_defineStruct('::IceGrid::AdapterDynamicInfo', '\\IceGrid\\AdapterDynamicInfo', array(
            array('id', $IcePHP__t_string), 
            array('proxy', $Ice__t_ObjectPrx)));
    }
}

namespace IceGrid
{
    if(!isset($IceGrid__t_AdapterDynamicInfoSeq))
    {
        $IceGrid__t_AdapterDynamicInfoSeq = IcePHP_defineSequence('::IceGrid::AdapterDynamicInfoSeq', $IceGrid__t_AdapterDynamicInfo);
    }
}

namespace IceGrid
{
    if(!class_exists('\\IceGrid\\NodeDynamicInfo'))
    {
        class NodeDynamicInfo
        {
            public function __construct($info=null, $servers=null, $adapters=null)
            {
                $this->info = is_null($info) ? new \IceGrid\NodeInfo : $info;
                $this->servers = $servers;
                $this->adapters = $adapters;
            }

            public function __toString()
            {
                global $IceGrid__t_NodeDynamicInfo;
                return IcePHP_stringify($this, $IceGrid__t_NodeDynamicInfo);
            }

            public $info;
            public $servers;
            public $adapters;
        }

        $IceGrid__t_NodeDynamicInfo = IcePHP_defineStruct('::IceGrid::NodeDynamicInfo', '\\IceGrid\\NodeDynamicInfo', array(
            array('info', $IceGrid__t_NodeInfo), 
            array('servers', $IceGrid__t_ServerDynamicInfoSeq), 
            array('adapters', $IceGrid__t_AdapterDynamicInfoSeq)));
    }
}

namespace IceGrid
{
    if(!isset($IceGrid__t_NodeDynamicInfoSeq))
    {
        $IceGrid__t_NodeDynamicInfoSeq = IcePHP_defineSequence('::IceGrid::NodeDynamicInfoSeq', $IceGrid__t_NodeDynamicInfo);
    }
}

namespace IceGrid
{
    if(!interface_exists('\\IceGrid\\NodeObserver'))
    {
        interface NodeObserver
        {
            public function nodeInit($nodes);
            public function nodeUp($node);
            public function nodeDown($name);
            public function updateServer($node, $updatedInfo);
            public function updateAdapter($node, $updatedInfo);
        }

        class NodeObserverPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::IceGrid::NodeObserver', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::IceGrid::NodeObserver', $facet);
            }
        }

        $IceGrid__t_NodeObserver = IcePHP_defineClass('::IceGrid::NodeObserver', '\\IceGrid\\NodeObserver', -1, true, false, $Ice__t_Object, null, null);

        $IceGrid__t_NodeObserverPrx = IcePHP_defineProxy($IceGrid__t_NodeObserver);

        IcePHP_defineOperation($IceGrid__t_NodeObserver, 'nodeInit', 0, 0, 0, array(array($IceGrid__t_NodeDynamicInfoSeq, false, 0)), null, null, null);
        IcePHP_defineOperation($IceGrid__t_NodeObserver, 'nodeUp', 0, 0, 0, array(array($IceGrid__t_NodeDynamicInfo, false, 0)), null, null, null);
        IcePHP_defineOperation($IceGrid__t_NodeObserver, 'nodeDown', 0, 0, 0, array(array($IcePHP__t_string, false, 0)), null, null, null);
        IcePHP_defineOperation($IceGrid__t_NodeObserver, 'updateServer', 0, 0, 0, array(array($IcePHP__t_string, false, 0), array($IceGrid__t_ServerDynamicInfo, false, 0)), null, null, null);
        IcePHP_defineOperation($IceGrid__t_NodeObserver, 'updateAdapter', 0, 0, 0, array(array($IcePHP__t_string, false, 0), array($IceGrid__t_AdapterDynamicInfo, false, 0)), null, null, null);
    }
}

namespace IceGrid
{
    if(!interface_exists('\\IceGrid\\ApplicationObserver'))
    {
        interface ApplicationObserver
        {
            public function applicationInit($serial, $applications);
            public function applicationAdded($serial, $desc);
            public function applicationRemoved($serial, $name);
            public function applicationUpdated($serial, $desc);
        }

        class ApplicationObserverPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::IceGrid::ApplicationObserver', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::IceGrid::ApplicationObserver', $facet);
            }
        }

        $IceGrid__t_ApplicationObserver = IcePHP_defineClass('::IceGrid::ApplicationObserver', '\\IceGrid\\ApplicationObserver', -1, true, false, $Ice__t_Object, null, null);

        $IceGrid__t_ApplicationObserverPrx = IcePHP_defineProxy($IceGrid__t_ApplicationObserver);

        IcePHP_defineOperation($IceGrid__t_ApplicationObserver, 'applicationInit', 0, 0, 0, array(array($IcePHP__t_int, false, 0), array($IceGrid__t_ApplicationInfoSeq, false, 0)), null, null, null);
        IcePHP_defineOperation($IceGrid__t_ApplicationObserver, 'applicationAdded', 0, 0, 0, array(array($IcePHP__t_int, false, 0), array($IceGrid__t_ApplicationInfo, false, 0)), null, null, null);
        IcePHP_defineOperation($IceGrid__t_ApplicationObserver, 'applicationRemoved', 0, 0, 0, array(array($IcePHP__t_int, false, 0), array($IcePHP__t_string, false, 0)), null, null, null);
        IcePHP_defineOperation($IceGrid__t_ApplicationObserver, 'applicationUpdated', 0, 0, 0, array(array($IcePHP__t_int, false, 0), array($IceGrid__t_ApplicationUpdateInfo, false, 0)), null, null, null);
    }
}

namespace IceGrid
{
    if(!interface_exists('\\IceGrid\\AdapterObserver'))
    {
        interface AdapterObserver
        {
            public function adapterInit($adpts);
            public function adapterAdded($info);
            public function adapterUpdated($info);
            public function adapterRemoved($id);
        }

        class AdapterObserverPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::IceGrid::AdapterObserver', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::IceGrid::AdapterObserver', $facet);
            }
        }

        $IceGrid__t_AdapterObserver = IcePHP_defineClass('::IceGrid::AdapterObserver', '\\IceGrid\\AdapterObserver', -1, true, false, $Ice__t_Object, null, null);

        $IceGrid__t_AdapterObserverPrx = IcePHP_defineProxy($IceGrid__t_AdapterObserver);

        IcePHP_defineOperation($IceGrid__t_AdapterObserver, 'adapterInit', 0, 0, 0, array(array($IceGrid__t_AdapterInfoSeq, false, 0)), null, null, null);
        IcePHP_defineOperation($IceGrid__t_AdapterObserver, 'adapterAdded', 0, 0, 0, array(array($IceGrid__t_AdapterInfo, false, 0)), null, null, null);
        IcePHP_defineOperation($IceGrid__t_AdapterObserver, 'adapterUpdated', 0, 0, 0, array(array($IceGrid__t_AdapterInfo, false, 0)), null, null, null);
        IcePHP_defineOperation($IceGrid__t_AdapterObserver, 'adapterRemoved', 0, 0, 0, array(array($IcePHP__t_string, false, 0)), null, null, null);
    }
}

namespace IceGrid
{
    if(!interface_exists('\\IceGrid\\ObjectObserver'))
    {
        interface ObjectObserver
        {
            public function objectInit($objects);
            public function objectAdded($info);
            public function objectUpdated($info);
            public function objectRemoved($id);
        }

        class ObjectObserverPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::IceGrid::ObjectObserver', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::IceGrid::ObjectObserver', $facet);
            }
        }

        $IceGrid__t_ObjectObserver = IcePHP_defineClass('::IceGrid::ObjectObserver', '\\IceGrid\\ObjectObserver', -1, true, false, $Ice__t_Object, null, null);

        $IceGrid__t_ObjectObserverPrx = IcePHP_defineProxy($IceGrid__t_ObjectObserver);

        IcePHP_defineOperation($IceGrid__t_ObjectObserver, 'objectInit', 0, 0, 0, array(array($IceGrid__t_ObjectInfoSeq, false, 0)), null, null, null);
        IcePHP_defineOperation($IceGrid__t_ObjectObserver, 'objectAdded', 0, 0, 0, array(array($IceGrid__t_ObjectInfo, false, 0)), null, null, null);
        IcePHP_defineOperation($IceGrid__t_ObjectObserver, 'objectUpdated', 0, 0, 0, array(array($IceGrid__t_ObjectInfo, false, 0)), null, null, null);
        IcePHP_defineOperation($IceGrid__t_ObjectObserver, 'objectRemoved', 0, 0, 0, array(array($Ice__t_Identity, false, 0)), null, null, null);
    }
}

namespace IceGrid
{
    if(!interface_exists('\\IceGrid\\RegistryObserver'))
    {
        interface RegistryObserver
        {
            public function registryInit($registries);
            public function registryUp($node);
            public function registryDown($name);
        }

        class RegistryObserverPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::IceGrid::RegistryObserver', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::IceGrid::RegistryObserver', $facet);
            }
        }

        $IceGrid__t_RegistryObserver = IcePHP_defineClass('::IceGrid::RegistryObserver', '\\IceGrid\\RegistryObserver', -1, true, false, $Ice__t_Object, null, null);

        $IceGrid__t_RegistryObserverPrx = IcePHP_defineProxy($IceGrid__t_RegistryObserver);

        IcePHP_defineOperation($IceGrid__t_RegistryObserver, 'registryInit', 0, 0, 0, array(array($IceGrid__t_RegistryInfoSeq, false, 0)), null, null, null);
        IcePHP_defineOperation($IceGrid__t_RegistryObserver, 'registryUp', 0, 0, 0, array(array($IceGrid__t_RegistryInfo, false, 0)), null, null, null);
        IcePHP_defineOperation($IceGrid__t_RegistryObserver, 'registryDown', 0, 0, 0, array(array($IcePHP__t_string, false, 0)), null, null, null);
    }
}
?>
