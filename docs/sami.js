
window.projectVersion = 'master';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:Tink" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink.html">Tink</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Tink_Controller" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Controller.html">Controller</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Tink_Controller_Account" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Controller/Account.html">Account</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Tink_Controller_Account_Close" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Controller/Account/Close.html">Close</a>                    </div>                </li>                            <li data-name="class:Tink_Controller_Account_Info" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Controller/Account/Info.html">Info</a>                    </div>                </li>                            <li data-name="class:Tink_Controller_Account_Open" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Controller/Account/Open.html">Open</a>                    </div>                </li>                            <li data-name="class:Tink_Controller_Account_Transfer" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Controller/Account/Transfer.html">Transfer</a>                    </div>                </li>                            <li data-name="class:Tink_Controller_Account_WithDraw" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Controller/Account/WithDraw.html">WithDraw</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:Tink_Controller_AbstractController" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Controller/AbstractController.html">AbstractController</a>                    </div>                </li>                            <li data-name="class:Tink_Controller_ControllerResult" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Controller/ControllerResult.html">ControllerResult</a>                    </div>                </li>                            <li data-name="class:Tink_Controller_ControllerResultInterface" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Controller/ControllerResultInterface.html">ControllerResultInterface</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Tink_Middleware" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Middleware.html">Middleware</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Tink_Middleware_CheckAccount" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Middleware/CheckAccount.html">CheckAccount</a>                    </div>                </li>                            <li data-name="class:Tink_Middleware_CheckOwner" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Middleware/CheckOwner.html">CheckOwner</a>                    </div>                </li>                            <li data-name="class:Tink_Middleware_DBLog" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Middleware/DBLog.html">DBLog</a>                    </div>                </li>                            <li data-name="class:Tink_Middleware_ResponseCache" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Middleware/ResponseCache.html">ResponseCache</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Tink_Model" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Model.html">Model</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Tink_Model_Account" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Model/Account.html">Account</a>                    </div>                </li>                            <li data-name="class:Tink_Model_History" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Model/History.html">History</a>                    </div>                </li>                            <li data-name="class:Tink_Model_Owner" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Model/Owner.html">Owner</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Tink_Module" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Module.html">Module</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Tink_Module_Transfer" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Module/Transfer.html">Transfer</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Tink_Module_Transfer_Rule" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Module/Transfer/Rule.html">Rule</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Tink_Module_Transfer_Rule_BuildRulesArray" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="Tink/Module/Transfer/Rule/BuildRulesArray.html">BuildRulesArray</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_Rule_RuleApiApprove" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="Tink/Module/Transfer/Rule/RuleApiApprove.html">RuleApiApprove</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_Rule_RuleDailyLimit" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="Tink/Module/Transfer/Rule/RuleDailyLimit.html">RuleDailyLimit</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_Rule_RuleInterface" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="Tink/Module/Transfer/Rule/RuleInterface.html">RuleInterface</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_Rule_RuleWithDrawAmount" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="Tink/Module/Transfer/Rule/RuleWithDrawAmount.html">RuleWithDrawAmount</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_Rule_RuleWithDrawAmountExtraCharge" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="Tink/Module/Transfer/Rule/RuleWithDrawAmountExtraCharge.html">RuleWithDrawAmountExtraCharge</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:Tink_Module_Transfer_BuildTransfer" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Transfer/BuildTransfer.html">BuildTransfer</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_Transfer" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Transfer/Transfer.html">Transfer</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_TransferOtherOwner" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Transfer/TransferOtherOwner.html">TransferOtherOwner</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_TransferOwnerInterface" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Transfer/TransferOwnerInterface.html">TransferOwnerInterface</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_TransferResult" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Transfer/TransferResult.html">TransferResult</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_TransferResultInterface" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Transfer/TransferResultInterface.html">TransferResultInterface</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_TransferSameOwner" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Transfer/TransferSameOwner.html">TransferSameOwner</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:Tink_Module_AccountModule" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Module/AccountModule.html">AccountModule</a>                    </div>                </li>                            <li data-name="class:Tink_Module_HistoryModule" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Module/HistoryModule.html">HistoryModule</a>                    </div>                </li>                            <li data-name="class:Tink_Module_OwnerModule" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Module/OwnerModule.html">OwnerModule</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "Tink.html", "name": "Tink", "doc": "Namespace Tink"},{"type": "Namespace", "link": "Tink/Controller.html", "name": "Tink\\Controller", "doc": "Namespace Tink\\Controller"},{"type": "Namespace", "link": "Tink/Controller/Account.html", "name": "Tink\\Controller\\Account", "doc": "Namespace Tink\\Controller\\Account"},{"type": "Namespace", "link": "Tink/Middleware.html", "name": "Tink\\Middleware", "doc": "Namespace Tink\\Middleware"},{"type": "Namespace", "link": "Tink/Model.html", "name": "Tink\\Model", "doc": "Namespace Tink\\Model"},{"type": "Namespace", "link": "Tink/Module.html", "name": "Tink\\Module", "doc": "Namespace Tink\\Module"},{"type": "Namespace", "link": "Tink/Module/Transfer.html", "name": "Tink\\Module\\Transfer", "doc": "Namespace Tink\\Module\\Transfer"},{"type": "Namespace", "link": "Tink/Module/Transfer/Rule.html", "name": "Tink\\Module\\Transfer\\Rule", "doc": "Namespace Tink\\Module\\Transfer\\Rule"},
            {"type": "Interface", "fromName": "Tink\\Controller", "fromLink": "Tink/Controller.html", "link": "Tink/Controller/ControllerResultInterface.html", "name": "Tink\\Controller\\ControllerResultInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Controller\\ControllerResultInterface", "fromLink": "Tink/Controller/ControllerResultInterface.html", "link": "Tink/Controller/ControllerResultInterface.html#method_getStatus", "name": "Tink\\Controller\\ControllerResultInterface::getStatus", "doc": "&quot;get the response status&quot;"},
                    {"type": "Method", "fromName": "Tink\\Controller\\ControllerResultInterface", "fromLink": "Tink/Controller/ControllerResultInterface.html", "link": "Tink/Controller/ControllerResultInterface.html#method_getOutput", "name": "Tink\\Controller\\ControllerResultInterface::getOutput", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Controller\\ControllerResultInterface", "fromLink": "Tink/Controller/ControllerResultInterface.html", "link": "Tink/Controller/ControllerResultInterface.html#method_getResponse", "name": "Tink\\Controller\\ControllerResultInterface::getResponse", "doc": "&quot;Proccess the Response&quot;"},
            
            {"type": "Interface", "fromName": "Tink\\Module\\Transfer\\Rule", "fromLink": "Tink/Module/Transfer/Rule.html", "link": "Tink/Module/Transfer/Rule/RuleInterface.html", "name": "Tink\\Module\\Transfer\\Rule\\RuleInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleInterface", "fromLink": "Tink/Module/Transfer/Rule/RuleInterface.html", "link": "Tink/Module/Transfer/Rule/RuleInterface.html#method_validate", "name": "Tink\\Module\\Transfer\\Rule\\RuleInterface::validate", "doc": "&quot;validate rule.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleInterface", "fromLink": "Tink/Module/Transfer/Rule/RuleInterface.html", "link": "Tink/Module/Transfer/Rule/RuleInterface.html#method_getErrorMsg", "name": "Tink\\Module\\Transfer\\Rule\\RuleInterface::getErrorMsg", "doc": "&quot;get Error Message.&quot;"},
            
            {"type": "Interface", "fromName": "Tink\\Module\\Transfer", "fromLink": "Tink/Module/Transfer.html", "link": "Tink/Module/Transfer/TransferOwnerInterface.html", "name": "Tink\\Module\\Transfer\\TransferOwnerInterface", "doc": "&quot;Transfer Owner Interface.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferOwnerInterface", "fromLink": "Tink/Module/Transfer/TransferOwnerInterface.html", "link": "Tink/Module/Transfer/TransferOwnerInterface.html#method_transfer", "name": "Tink\\Module\\Transfer\\TransferOwnerInterface::transfer", "doc": "&quot;transfer money.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferOwnerInterface", "fromLink": "Tink/Module/Transfer/TransferOwnerInterface.html", "link": "Tink/Module/Transfer/TransferOwnerInterface.html#method_canTransfer", "name": "Tink\\Module\\Transfer\\TransferOwnerInterface::canTransfer", "doc": "&quot;Check Can Transfer or not.&quot;"},
            
            {"type": "Interface", "fromName": "Tink\\Module\\Transfer", "fromLink": "Tink/Module/Transfer.html", "link": "Tink/Module/Transfer/TransferResultInterface.html", "name": "Tink\\Module\\Transfer\\TransferResultInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferResultInterface", "fromLink": "Tink/Module/Transfer/TransferResultInterface.html", "link": "Tink/Module/Transfer/TransferResultInterface.html#method_getStatus", "name": "Tink\\Module\\Transfer\\TransferResultInterface::getStatus", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferResultInterface", "fromLink": "Tink/Module/Transfer/TransferResultInterface.html", "link": "Tink/Module/Transfer/TransferResultInterface.html#method_getMsg", "name": "Tink\\Module\\Transfer\\TransferResultInterface::getMsg", "doc": "&quot;&quot;"},
            
            
            {"type": "Class", "fromName": "Tink\\Controller", "fromLink": "Tink/Controller.html", "link": "Tink/Controller/AbstractController.html", "name": "Tink\\Controller\\AbstractController", "doc": "&quot;Abstract Controller for ARD&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Controller\\AbstractController", "fromLink": "Tink/Controller/AbstractController.html", "link": "Tink/Controller/AbstractController.html#method___construct", "name": "Tink\\Controller\\AbstractController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Controller\\AbstractController", "fromLink": "Tink/Controller/AbstractController.html", "link": "Tink/Controller/AbstractController.html#method___invoke", "name": "Tink\\Controller\\AbstractController::__invoke", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Controller\\AbstractController", "fromLink": "Tink/Controller/AbstractController.html", "link": "Tink/Controller/AbstractController.html#method_action", "name": "Tink\\Controller\\AbstractController::action", "doc": "&quot;the action process the Request&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Controller\\Account", "fromLink": "Tink/Controller/Account.html", "link": "Tink/Controller/Account/Close.html", "name": "Tink\\Controller\\Account\\Close", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Controller\\Account\\Close", "fromLink": "Tink/Controller/Account/Close.html", "link": "Tink/Controller/Account/Close.html#method_action", "name": "Tink\\Controller\\Account\\Close::action", "doc": "&quot;the action process the Request&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Controller\\Account", "fromLink": "Tink/Controller/Account.html", "link": "Tink/Controller/Account/Info.html", "name": "Tink\\Controller\\Account\\Info", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Controller\\Account\\Info", "fromLink": "Tink/Controller/Account/Info.html", "link": "Tink/Controller/Account/Info.html#method_action", "name": "Tink\\Controller\\Account\\Info::action", "doc": "&quot;the action process the Request&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Controller\\Account", "fromLink": "Tink/Controller/Account.html", "link": "Tink/Controller/Account/Open.html", "name": "Tink\\Controller\\Account\\Open", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Controller\\Account\\Open", "fromLink": "Tink/Controller/Account/Open.html", "link": "Tink/Controller/Account/Open.html#method_action", "name": "Tink\\Controller\\Account\\Open::action", "doc": "&quot;the action process the Request&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Controller\\Account", "fromLink": "Tink/Controller/Account.html", "link": "Tink/Controller/Account/Transfer.html", "name": "Tink\\Controller\\Account\\Transfer", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Controller\\Account\\Transfer", "fromLink": "Tink/Controller/Account/Transfer.html", "link": "Tink/Controller/Account/Transfer.html#method_action", "name": "Tink\\Controller\\Account\\Transfer::action", "doc": "&quot;the action process the Request&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Controller\\Account", "fromLink": "Tink/Controller/Account.html", "link": "Tink/Controller/Account/WithDraw.html", "name": "Tink\\Controller\\Account\\WithDraw", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Controller\\Account\\WithDraw", "fromLink": "Tink/Controller/Account/WithDraw.html", "link": "Tink/Controller/Account/WithDraw.html#method_action", "name": "Tink\\Controller\\Account\\WithDraw::action", "doc": "&quot;the action process the Request&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Controller", "fromLink": "Tink/Controller.html", "link": "Tink/Controller/ControllerResult.html", "name": "Tink\\Controller\\ControllerResult", "doc": "&quot;Class Response Result&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Controller\\ControllerResult", "fromLink": "Tink/Controller/ControllerResult.html", "link": "Tink/Controller/ControllerResult.html#method___construct", "name": "Tink\\Controller\\ControllerResult::__construct", "doc": "&quot;Response Result constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Controller\\ControllerResult", "fromLink": "Tink/Controller/ControllerResult.html", "link": "Tink/Controller/ControllerResult.html#method_getStatus", "name": "Tink\\Controller\\ControllerResult::getStatus", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Controller\\ControllerResult", "fromLink": "Tink/Controller/ControllerResult.html", "link": "Tink/Controller/ControllerResult.html#method_getOutput", "name": "Tink\\Controller\\ControllerResult::getOutput", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Controller\\ControllerResult", "fromLink": "Tink/Controller/ControllerResult.html", "link": "Tink/Controller/ControllerResult.html#method_getResponse", "name": "Tink\\Controller\\ControllerResult::getResponse", "doc": "&quot;Proccess the Response&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Controller", "fromLink": "Tink/Controller.html", "link": "Tink/Controller/ControllerResultInterface.html", "name": "Tink\\Controller\\ControllerResultInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Controller\\ControllerResultInterface", "fromLink": "Tink/Controller/ControllerResultInterface.html", "link": "Tink/Controller/ControllerResultInterface.html#method_getStatus", "name": "Tink\\Controller\\ControllerResultInterface::getStatus", "doc": "&quot;get the response status&quot;"},
                    {"type": "Method", "fromName": "Tink\\Controller\\ControllerResultInterface", "fromLink": "Tink/Controller/ControllerResultInterface.html", "link": "Tink/Controller/ControllerResultInterface.html#method_getOutput", "name": "Tink\\Controller\\ControllerResultInterface::getOutput", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Controller\\ControllerResultInterface", "fromLink": "Tink/Controller/ControllerResultInterface.html", "link": "Tink/Controller/ControllerResultInterface.html#method_getResponse", "name": "Tink\\Controller\\ControllerResultInterface::getResponse", "doc": "&quot;Proccess the Response&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Middleware", "fromLink": "Tink/Middleware.html", "link": "Tink/Middleware/CheckAccount.html", "name": "Tink\\Middleware\\CheckAccount", "doc": "&quot;Description of CheckOwner.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Middleware\\CheckAccount", "fromLink": "Tink/Middleware/CheckAccount.html", "link": "Tink/Middleware/CheckAccount.html#method___construct", "name": "Tink\\Middleware\\CheckAccount::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Middleware\\CheckAccount", "fromLink": "Tink/Middleware/CheckAccount.html", "link": "Tink/Middleware/CheckAccount.html#method___invoke", "name": "Tink\\Middleware\\CheckAccount::__invoke", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Middleware", "fromLink": "Tink/Middleware.html", "link": "Tink/Middleware/CheckOwner.html", "name": "Tink\\Middleware\\CheckOwner", "doc": "&quot;Description of CheckOwner.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Middleware\\CheckOwner", "fromLink": "Tink/Middleware/CheckOwner.html", "link": "Tink/Middleware/CheckOwner.html#method___construct", "name": "Tink\\Middleware\\CheckOwner::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Middleware\\CheckOwner", "fromLink": "Tink/Middleware/CheckOwner.html", "link": "Tink/Middleware/CheckOwner.html#method___invoke", "name": "Tink\\Middleware\\CheckOwner::__invoke", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Middleware", "fromLink": "Tink/Middleware.html", "link": "Tink/Middleware/DBLog.html", "name": "Tink\\Middleware\\DBLog", "doc": "&quot;logs sql.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Middleware\\DBLog", "fromLink": "Tink/Middleware/DBLog.html", "link": "Tink/Middleware/DBLog.html#method___construct", "name": "Tink\\Middleware\\DBLog::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Middleware\\DBLog", "fromLink": "Tink/Middleware/DBLog.html", "link": "Tink/Middleware/DBLog.html#method___invoke", "name": "Tink\\Middleware\\DBLog::__invoke", "doc": "&quot;logRoute app setting determineRouteBeforeAppMiddleware = true.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Middleware", "fromLink": "Tink/Middleware.html", "link": "Tink/Middleware/ResponseCache.html", "name": "Tink\\Middleware\\ResponseCache", "doc": "&quot;logs sql.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Middleware\\ResponseCache", "fromLink": "Tink/Middleware/ResponseCache.html", "link": "Tink/Middleware/ResponseCache.html#method___construct", "name": "Tink\\Middleware\\ResponseCache::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Middleware\\ResponseCache", "fromLink": "Tink/Middleware/ResponseCache.html", "link": "Tink/Middleware/ResponseCache.html#method___invoke", "name": "Tink\\Middleware\\ResponseCache::__invoke", "doc": "&quot;add cache for response, app setting determineRouteBeforeAppMiddleware = true.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Model", "fromLink": "Tink/Model.html", "link": "Tink/Model/Account.html", "name": "Tink\\Model\\Account", "doc": "&quot;This is the database Account table&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Model\\Account", "fromLink": "Tink/Model/Account.html", "link": "Tink/Model/Account.html#method_checkWithDraw", "name": "Tink\\Model\\Account::checkWithDraw", "doc": "&quot;Check have enough money for with draw.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Model\\Account", "fromLink": "Tink/Model/Account.html", "link": "Tink/Model/Account.html#method_calBalance", "name": "Tink\\Model\\Account::calBalance", "doc": "&quot;Cal Account Balance after some action.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Model\\Account", "fromLink": "Tink/Model/Account.html", "link": "Tink/Model/Account.html#method_history", "name": "Tink\\Model\\Account::history", "doc": "&quot;Account HasMany History.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Model", "fromLink": "Tink/Model.html", "link": "Tink/Model/History.html", "name": "Tink\\Model\\History", "doc": "&quot;This is the database History table&quot;"},
                    
            {"type": "Class", "fromName": "Tink\\Model", "fromLink": "Tink/Model.html", "link": "Tink/Model/Owner.html", "name": "Tink\\Model\\Owner", "doc": "&quot;This is the database Owner table&quot;"},
                    
            {"type": "Class", "fromName": "Tink\\Module", "fromLink": "Tink/Module.html", "link": "Tink/Module/AccountModule.html", "name": "Tink\\Module\\AccountModule", "doc": "&quot;Account Module\nCURD - for Account Table&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\AccountModule", "fromLink": "Tink/Module/AccountModule.html", "link": "Tink/Module/AccountModule.html#method___construct", "name": "Tink\\Module\\AccountModule::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\AccountModule", "fromLink": "Tink/Module/AccountModule.html", "link": "Tink/Module/AccountModule.html#method_create", "name": "Tink\\Module\\AccountModule::create", "doc": "&quot;Create Account.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\AccountModule", "fromLink": "Tink/Module/AccountModule.html", "link": "Tink/Module/AccountModule.html#method_close", "name": "Tink\\Module\\AccountModule::close", "doc": "&quot;Close Account.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\AccountModule", "fromLink": "Tink/Module/AccountModule.html", "link": "Tink/Module/AccountModule.html#method_clearAcInfoCache", "name": "Tink\\Module\\AccountModule::clearAcInfoCache", "doc": "&quot;clear account info cache, Key : Account\/{id}&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\AccountModule", "fromLink": "Tink/Module/AccountModule.html", "link": "Tink/Module/AccountModule.html#method_amountChange", "name": "Tink\\Module\\AccountModule::amountChange", "doc": "&quot;when change amount - add history.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\AccountModule", "fromLink": "Tink/Module/AccountModule.html", "link": "Tink/Module/AccountModule.html#method_validator", "name": "Tink\\Module\\AccountModule::validator", "doc": "&quot;Validator - before create account.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\AccountModule", "fromLink": "Tink/Module/AccountModule.html", "link": "Tink/Module/AccountModule.html#method_getAcInfo", "name": "Tink\\Module\\AccountModule::getAcInfo", "doc": "&quot;Get Account info. Cache Key : Account\/{id}&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module", "fromLink": "Tink/Module.html", "link": "Tink/Module/HistoryModule.html", "name": "Tink\\Module\\HistoryModule", "doc": "&quot;History Module - CURD for History table.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\HistoryModule", "fromLink": "Tink/Module/HistoryModule.html", "link": "Tink/Module/HistoryModule.html#method___construct", "name": "Tink\\Module\\HistoryModule::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\HistoryModule", "fromLink": "Tink/Module/HistoryModule.html", "link": "Tink/Module/HistoryModule.html#method_create", "name": "Tink\\Module\\HistoryModule::create", "doc": "&quot;Create History.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\HistoryModule", "fromLink": "Tink/Module/HistoryModule.html", "link": "Tink/Module/HistoryModule.html#method_validator", "name": "Tink\\Module\\HistoryModule::validator", "doc": "&quot;Validator rule.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module", "fromLink": "Tink/Module.html", "link": "Tink/Module/OwnerModule.html", "name": "Tink\\Module\\OwnerModule", "doc": "&quot;Owner Module - CURD for Owner table.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\OwnerModule", "fromLink": "Tink/Module/OwnerModule.html", "link": "Tink/Module/OwnerModule.html#method___construct", "name": "Tink\\Module\\OwnerModule::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\OwnerModule", "fromLink": "Tink/Module/OwnerModule.html", "link": "Tink/Module/OwnerModule.html#method_getOwnerInfo", "name": "Tink\\Module\\OwnerModule::getOwnerInfo", "doc": "&quot;Get Owner info.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer", "fromLink": "Tink/Module/Transfer.html", "link": "Tink/Module/Transfer/BuildTransfer.html", "name": "Tink\\Module\\Transfer\\BuildTransfer", "doc": "&quot;Build Transfer Class.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\BuildTransfer", "fromLink": "Tink/Module/Transfer/BuildTransfer.html", "link": "Tink/Module/Transfer/BuildTransfer.html#method___construct", "name": "Tink\\Module\\Transfer\\BuildTransfer::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\BuildTransfer", "fromLink": "Tink/Module/Transfer/BuildTransfer.html", "link": "Tink/Module/Transfer/BuildTransfer.html#method_create", "name": "Tink\\Module\\Transfer\\BuildTransfer::create", "doc": "&quot;Get Transfer Class.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer\\Rule", "fromLink": "Tink/Module/Transfer/Rule.html", "link": "Tink/Module/Transfer/Rule/BuildRulesArray.html", "name": "Tink\\Module\\Transfer\\Rule\\BuildRulesArray", "doc": "&quot;Setup the Rule for special case.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\BuildRulesArray", "fromLink": "Tink/Module/Transfer/Rule/BuildRulesArray.html", "link": "Tink/Module/Transfer/Rule/BuildRulesArray.html#method___construct", "name": "Tink\\Module\\Transfer\\Rule\\BuildRulesArray::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\BuildRulesArray", "fromLink": "Tink/Module/Transfer/Rule/BuildRulesArray.html", "link": "Tink/Module/Transfer/Rule/BuildRulesArray.html#method_buildSameOwnerRule", "name": "Tink\\Module\\Transfer\\Rule\\BuildRulesArray::buildSameOwnerRule", "doc": "&quot;Same Owner Rules.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\BuildRulesArray", "fromLink": "Tink/Module/Transfer/Rule/BuildRulesArray.html", "link": "Tink/Module/Transfer/Rule/BuildRulesArray.html#method_buildOtherOwnerRule", "name": "Tink\\Module\\Transfer\\Rule\\BuildRulesArray::buildOtherOwnerRule", "doc": "&quot;other Owner Rules.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer\\Rule", "fromLink": "Tink/Module/Transfer/Rule.html", "link": "Tink/Module/Transfer/Rule/RuleApiApprove.html", "name": "Tink\\Module\\Transfer\\Rule\\RuleApiApprove", "doc": "&quot;Description of RuleWithDrawAmount.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleApiApprove", "fromLink": "Tink/Module/Transfer/Rule/RuleApiApprove.html", "link": "Tink/Module/Transfer/Rule/RuleApiApprove.html#method___construct", "name": "Tink\\Module\\Transfer\\Rule\\RuleApiApprove::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleApiApprove", "fromLink": "Tink/Module/Transfer/Rule/RuleApiApprove.html", "link": "Tink/Module/Transfer/Rule/RuleApiApprove.html#method_validate", "name": "Tink\\Module\\Transfer\\Rule\\RuleApiApprove::validate", "doc": "&quot;validate rule.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleApiApprove", "fromLink": "Tink/Module/Transfer/Rule/RuleApiApprove.html", "link": "Tink/Module/Transfer/Rule/RuleApiApprove.html#method_getErrorMsg", "name": "Tink\\Module\\Transfer\\Rule\\RuleApiApprove::getErrorMsg", "doc": "&quot;get Error Message.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer\\Rule", "fromLink": "Tink/Module/Transfer/Rule.html", "link": "Tink/Module/Transfer/Rule/RuleDailyLimit.html", "name": "Tink\\Module\\Transfer\\Rule\\RuleDailyLimit", "doc": "&quot;Description of RuleDailyLimit.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleDailyLimit", "fromLink": "Tink/Module/Transfer/Rule/RuleDailyLimit.html", "link": "Tink/Module/Transfer/Rule/RuleDailyLimit.html#method___construct", "name": "Tink\\Module\\Transfer\\Rule\\RuleDailyLimit::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleDailyLimit", "fromLink": "Tink/Module/Transfer/Rule/RuleDailyLimit.html", "link": "Tink/Module/Transfer/Rule/RuleDailyLimit.html#method_validate", "name": "Tink\\Module\\Transfer\\Rule\\RuleDailyLimit::validate", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleDailyLimit", "fromLink": "Tink/Module/Transfer/Rule/RuleDailyLimit.html", "link": "Tink/Module/Transfer/Rule/RuleDailyLimit.html#method_getErrorMsg", "name": "Tink\\Module\\Transfer\\Rule\\RuleDailyLimit::getErrorMsg", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer\\Rule", "fromLink": "Tink/Module/Transfer/Rule.html", "link": "Tink/Module/Transfer/Rule/RuleInterface.html", "name": "Tink\\Module\\Transfer\\Rule\\RuleInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleInterface", "fromLink": "Tink/Module/Transfer/Rule/RuleInterface.html", "link": "Tink/Module/Transfer/Rule/RuleInterface.html#method_validate", "name": "Tink\\Module\\Transfer\\Rule\\RuleInterface::validate", "doc": "&quot;validate rule.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleInterface", "fromLink": "Tink/Module/Transfer/Rule/RuleInterface.html", "link": "Tink/Module/Transfer/Rule/RuleInterface.html#method_getErrorMsg", "name": "Tink\\Module\\Transfer\\Rule\\RuleInterface::getErrorMsg", "doc": "&quot;get Error Message.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer\\Rule", "fromLink": "Tink/Module/Transfer/Rule.html", "link": "Tink/Module/Transfer/Rule/RuleWithDrawAmount.html", "name": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmount", "doc": "&quot;Description of RuleWithDrawAmount.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmount", "fromLink": "Tink/Module/Transfer/Rule/RuleWithDrawAmount.html", "link": "Tink/Module/Transfer/Rule/RuleWithDrawAmount.html#method___construct", "name": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmount::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmount", "fromLink": "Tink/Module/Transfer/Rule/RuleWithDrawAmount.html", "link": "Tink/Module/Transfer/Rule/RuleWithDrawAmount.html#method_validate", "name": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmount::validate", "doc": "&quot;validate rule.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmount", "fromLink": "Tink/Module/Transfer/Rule/RuleWithDrawAmount.html", "link": "Tink/Module/Transfer/Rule/RuleWithDrawAmount.html#method_getErrorMsg", "name": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmount::getErrorMsg", "doc": "&quot;get Error Message.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer\\Rule", "fromLink": "Tink/Module/Transfer/Rule.html", "link": "Tink/Module/Transfer/Rule/RuleWithDrawAmountExtraCharge.html", "name": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmountExtraCharge", "doc": "&quot;Description of RuleWithDrawAmount.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmountExtraCharge", "fromLink": "Tink/Module/Transfer/Rule/RuleWithDrawAmountExtraCharge.html", "link": "Tink/Module/Transfer/Rule/RuleWithDrawAmountExtraCharge.html#method_validate", "name": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmountExtraCharge::validate", "doc": "&quot;validate rule.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmountExtraCharge", "fromLink": "Tink/Module/Transfer/Rule/RuleWithDrawAmountExtraCharge.html", "link": "Tink/Module/Transfer/Rule/RuleWithDrawAmountExtraCharge.html#method_getErrorMsg", "name": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmountExtraCharge::getErrorMsg", "doc": "&quot;get Error Message.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer", "fromLink": "Tink/Module/Transfer.html", "link": "Tink/Module/Transfer/Transfer.html", "name": "Tink\\Module\\Transfer\\Transfer", "doc": "&quot;Transfer Class.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Transfer", "fromLink": "Tink/Module/Transfer/Transfer.html", "link": "Tink/Module/Transfer/Transfer.html#method___construct", "name": "Tink\\Module\\Transfer\\Transfer::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Transfer", "fromLink": "Tink/Module/Transfer/Transfer.html", "link": "Tink/Module/Transfer/Transfer.html#method_canTransfer", "name": "Tink\\Module\\Transfer\\Transfer::canTransfer", "doc": "&quot;Check Can Transfer or not.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer", "fromLink": "Tink/Module/Transfer.html", "link": "Tink/Module/Transfer/TransferOtherOwner.html", "name": "Tink\\Module\\Transfer\\TransferOtherOwner", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferOtherOwner", "fromLink": "Tink/Module/Transfer/TransferOtherOwner.html", "link": "Tink/Module/Transfer/TransferOtherOwner.html#method_transfer", "name": "Tink\\Module\\Transfer\\TransferOtherOwner::transfer", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferOtherOwner", "fromLink": "Tink/Module/Transfer/TransferOtherOwner.html", "link": "Tink/Module/Transfer/TransferOtherOwner.html#method_canTransfer", "name": "Tink\\Module\\Transfer\\TransferOtherOwner::canTransfer", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer", "fromLink": "Tink/Module/Transfer.html", "link": "Tink/Module/Transfer/TransferOwnerInterface.html", "name": "Tink\\Module\\Transfer\\TransferOwnerInterface", "doc": "&quot;Transfer Owner Interface.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferOwnerInterface", "fromLink": "Tink/Module/Transfer/TransferOwnerInterface.html", "link": "Tink/Module/Transfer/TransferOwnerInterface.html#method_transfer", "name": "Tink\\Module\\Transfer\\TransferOwnerInterface::transfer", "doc": "&quot;transfer money.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferOwnerInterface", "fromLink": "Tink/Module/Transfer/TransferOwnerInterface.html", "link": "Tink/Module/Transfer/TransferOwnerInterface.html#method_canTransfer", "name": "Tink\\Module\\Transfer\\TransferOwnerInterface::canTransfer", "doc": "&quot;Check Can Transfer or not.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer", "fromLink": "Tink/Module/Transfer.html", "link": "Tink/Module/Transfer/TransferResult.html", "name": "Tink\\Module\\Transfer\\TransferResult", "doc": "&quot;Class TransferResult&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferResult", "fromLink": "Tink/Module/Transfer/TransferResult.html", "link": "Tink/Module/Transfer/TransferResult.html#method___construct", "name": "Tink\\Module\\Transfer\\TransferResult::__construct", "doc": "&quot;TransferResult constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferResult", "fromLink": "Tink/Module/Transfer/TransferResult.html", "link": "Tink/Module/Transfer/TransferResult.html#method_getStatus", "name": "Tink\\Module\\Transfer\\TransferResult::getStatus", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferResult", "fromLink": "Tink/Module/Transfer/TransferResult.html", "link": "Tink/Module/Transfer/TransferResult.html#method_getMsg", "name": "Tink\\Module\\Transfer\\TransferResult::getMsg", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer", "fromLink": "Tink/Module/Transfer.html", "link": "Tink/Module/Transfer/TransferResultInterface.html", "name": "Tink\\Module\\Transfer\\TransferResultInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferResultInterface", "fromLink": "Tink/Module/Transfer/TransferResultInterface.html", "link": "Tink/Module/Transfer/TransferResultInterface.html#method_getStatus", "name": "Tink\\Module\\Transfer\\TransferResultInterface::getStatus", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferResultInterface", "fromLink": "Tink/Module/Transfer/TransferResultInterface.html", "link": "Tink/Module/Transfer/TransferResultInterface.html#method_getMsg", "name": "Tink\\Module\\Transfer\\TransferResultInterface::getMsg", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer", "fromLink": "Tink/Module/Transfer.html", "link": "Tink/Module/Transfer/TransferSameOwner.html", "name": "Tink\\Module\\Transfer\\TransferSameOwner", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferSameOwner", "fromLink": "Tink/Module/Transfer/TransferSameOwner.html", "link": "Tink/Module/Transfer/TransferSameOwner.html#method_transfer", "name": "Tink\\Module\\Transfer\\TransferSameOwner::transfer", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferSameOwner", "fromLink": "Tink/Module/Transfer/TransferSameOwner.html", "link": "Tink/Module/Transfer/TransferSameOwner.html#method_canTransfer", "name": "Tink\\Module\\Transfer\\TransferSameOwner::canTransfer", "doc": "&quot;&quot;"},
            
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


