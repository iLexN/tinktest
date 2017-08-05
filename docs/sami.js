
window.projectVersion = 'master';

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:Tink" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink.html">Tink</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Tink_Command" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Command.html">Command</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Tink_Command_CacheCommand" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Command/CacheCommand.html">CacheCommand</a>                    </div>                </li>                            <li data-name="class:Tink_Command_ConfigCommand" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Command/ConfigCommand.html">ConfigCommand</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Tink_Controller" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Controller.html">Controller</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Tink_Controller_Account" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Controller/Account.html">Account</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Tink_Controller_Account_Close" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Controller/Account/Close.html">Close</a>                    </div>                </li>                            <li data-name="class:Tink_Controller_Account_Info" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Controller/Account/Info.html">Info</a>                    </div>                </li>                            <li data-name="class:Tink_Controller_Account_Open" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Controller/Account/Open.html">Open</a>                    </div>                </li>                            <li data-name="class:Tink_Controller_Account_Transfer" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Controller/Account/Transfer.html">Transfer</a>                    </div>                </li>                            <li data-name="class:Tink_Controller_Account_WithDraw" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Controller/Account/WithDraw.html">WithDraw</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Tink_Controller_User" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Controller/User.html">User</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Tink_Controller_User_User" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Controller/User/User.html">User</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:Tink_Controller_AbstractController" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Controller/AbstractController.html">AbstractController</a>                    </div>                </li>                            <li data-name="class:Tink_Controller_Info" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Controller/Info.html">Info</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Tink_Event" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Event.html">Event</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Tink_Event_Account" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Event/Account.html">Account</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Tink_Event_Account_AccountCache" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Event/Account/AccountCache.html">AccountCache</a>                    </div>                </li>                            <li data-name="class:Tink_Event_Account_AccountOpen" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Event/Account/AccountOpen.html">AccountOpen</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:Tink_Event_AccountListenerProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Event/AccountListenerProvider.html">AccountListenerProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Tink_Helper" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Helper.html">Helper</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Tink_Helper_ResponseResult" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Helper/ResponseResult.html">ResponseResult</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Tink_Helper_ResponseResult_JsonResponse" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Helper/ResponseResult/JsonResponse.html">JsonResponse</a>                    </div>                </li>                            <li data-name="class:Tink_Helper_ResponseResult_NotFountResponse" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Helper/ResponseResult/NotFountResponse.html">NotFountResponse</a>                    </div>                </li>                            <li data-name="class:Tink_Helper_ResponseResult_RedirectResponse" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Helper/ResponseResult/RedirectResponse.html">RedirectResponse</a>                    </div>                </li>                            <li data-name="class:Tink_Helper_ResponseResult_ResponseResultInterface" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Helper/ResponseResult/ResponseResultInterface.html">ResponseResultInterface</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Tink_Middleware" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Middleware.html">Middleware</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Tink_Middleware_CheckAccount" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Middleware/CheckAccount.html">CheckAccount</a>                    </div>                </li>                            <li data-name="class:Tink_Middleware_CheckOwner" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Middleware/CheckOwner.html">CheckOwner</a>                    </div>                </li>                            <li data-name="class:Tink_Middleware_DBLog" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Middleware/DBLog.html">DBLog</a>                    </div>                </li>                            <li data-name="class:Tink_Middleware_ResponseCache" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Middleware/ResponseCache.html">ResponseCache</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Tink_Model" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Model.html">Model</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Tink_Model_Account" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Model/Account.html">Account</a>                    </div>                </li>                            <li data-name="class:Tink_Model_History" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Model/History.html">History</a>                    </div>                </li>                            <li data-name="class:Tink_Model_Owner" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Model/Owner.html">Owner</a>                    </div>                </li>                            <li data-name="class:Tink_Model_Page" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Model/Page.html">Page</a>                    </div>                </li>                            <li data-name="class:Tink_Model_PageField" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Model/PageField.html">PageField</a>                    </div>                </li>                            <li data-name="class:Tink_Model_Permission" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Model/Permission.html">Permission</a>                    </div>                </li>                            <li data-name="class:Tink_Model_Role" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Model/Role.html">Role</a>                    </div>                </li>                            <li data-name="class:Tink_Model_User" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Model/User.html">User</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Tink_Module" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Module.html">Module</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Tink_Module_Fields" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Module/Fields.html">Fields</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Tink_Module_Fields_FieldInterface" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Fields/FieldInterface.html">FieldInterface</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Fields_FieldsManager" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Fields/FieldsManager.html">FieldsManager</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Fields_HtmlField" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Fields/HtmlField.html">HtmlField</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Fields_InterLinkField" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Fields/InterLinkField.html">InterLinkField</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Tink_Module_Transfer" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Module/Transfer.html">Transfer</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Tink_Module_Transfer_Rule" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Module/Transfer/Rule.html">Rule</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Tink_Module_Transfer_Rule_BuildRulesArray" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="Tink/Module/Transfer/Rule/BuildRulesArray.html">BuildRulesArray</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_Rule_RuleApiApprove" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="Tink/Module/Transfer/Rule/RuleApiApprove.html">RuleApiApprove</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_Rule_RuleDailyLimit" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="Tink/Module/Transfer/Rule/RuleDailyLimit.html">RuleDailyLimit</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_Rule_RuleInterface" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="Tink/Module/Transfer/Rule/RuleInterface.html">RuleInterface</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_Rule_RuleWithDrawAmount" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="Tink/Module/Transfer/Rule/RuleWithDrawAmount.html">RuleWithDrawAmount</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_Rule_RuleWithDrawAmountExtraCharge" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="Tink/Module/Transfer/Rule/RuleWithDrawAmountExtraCharge.html">RuleWithDrawAmountExtraCharge</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:Tink_Module_Transfer_BuildTransfer" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Transfer/BuildTransfer.html">BuildTransfer</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_Transfer" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Transfer/Transfer.html">Transfer</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_TransferOtherOwner" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Transfer/TransferOtherOwner.html">TransferOtherOwner</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_TransferOwnerInterface" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Transfer/TransferOwnerInterface.html">TransferOwnerInterface</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_TransferResult" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Transfer/TransferResult.html">TransferResult</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_TransferResultInterface" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Transfer/TransferResultInterface.html">TransferResultInterface</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Transfer_TransferSameOwner" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Transfer/TransferSameOwner.html">TransferSameOwner</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Tink_Module_Widget" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Module/Widget.html">Widget</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:Tink_Module_Widget_EachWidget" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Tink/Module/Widget/EachWidget.html">EachWidget</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:Tink_Module_Widget_EachWidget_ContactWidget" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="Tink/Module/Widget/EachWidget/ContactWidget.html">ContactWidget</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Widget_EachWidget_FrontPageWelcomeWidget" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="Tink/Module/Widget/EachWidget/FrontPageWelcomeWidget.html">FrontPageWelcomeWidget</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Widget_EachWidget_MainMenuWidget" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="Tink/Module/Widget/EachWidget/MainMenuWidget.html">MainMenuWidget</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Widget_EachWidget_MyInfoWidget" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="Tink/Module/Widget/EachWidget/MyInfoWidget.html">MyInfoWidget</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:Tink_Module_Widget_AbstractWidget" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Widget/AbstractWidget.html">AbstractWidget</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Widget_ContentTypeWidget" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Widget/ContentTypeWidget.html">ContentTypeWidget</a>                    </div>                </li>                            <li data-name="class:Tink_Module_Widget_GlobalWidget" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="Tink/Module/Widget/GlobalWidget.html">GlobalWidget</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:Tink_Module_AccountModule" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Module/AccountModule.html">AccountModule</a>                    </div>                </li>                            <li data-name="class:Tink_Module_HistoryModule" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Module/HistoryModule.html">HistoryModule</a>                    </div>                </li>                            <li data-name="class:Tink_Module_OwnerModule" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Module/OwnerModule.html">OwnerModule</a>                    </div>                </li>                            <li data-name="class:Tink_Module_PageModule" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Module/PageModule.html">PageModule</a>                    </div>                </li>                            <li data-name="class:Tink_Module_UserManager" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Module/UserManager.html">UserManager</a>                    </div>                </li>                            <li data-name="class:Tink_Module_WidgetManager" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="Tink/Module/WidgetManager.html">WidgetManager</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "Tink.html", "name": "Tink", "doc": "Namespace Tink"},{"type": "Namespace", "link": "Tink/Command.html", "name": "Tink\\Command", "doc": "Namespace Tink\\Command"},{"type": "Namespace", "link": "Tink/Controller.html", "name": "Tink\\Controller", "doc": "Namespace Tink\\Controller"},{"type": "Namespace", "link": "Tink/Controller/Account.html", "name": "Tink\\Controller\\Account", "doc": "Namespace Tink\\Controller\\Account"},{"type": "Namespace", "link": "Tink/Controller/User.html", "name": "Tink\\Controller\\User", "doc": "Namespace Tink\\Controller\\User"},{"type": "Namespace", "link": "Tink/Event.html", "name": "Tink\\Event", "doc": "Namespace Tink\\Event"},{"type": "Namespace", "link": "Tink/Event/Account.html", "name": "Tink\\Event\\Account", "doc": "Namespace Tink\\Event\\Account"},{"type": "Namespace", "link": "Tink/Helper.html", "name": "Tink\\Helper", "doc": "Namespace Tink\\Helper"},{"type": "Namespace", "link": "Tink/Helper/ResponseResult.html", "name": "Tink\\Helper\\ResponseResult", "doc": "Namespace Tink\\Helper\\ResponseResult"},{"type": "Namespace", "link": "Tink/Middleware.html", "name": "Tink\\Middleware", "doc": "Namespace Tink\\Middleware"},{"type": "Namespace", "link": "Tink/Model.html", "name": "Tink\\Model", "doc": "Namespace Tink\\Model"},{"type": "Namespace", "link": "Tink/Module.html", "name": "Tink\\Module", "doc": "Namespace Tink\\Module"},{"type": "Namespace", "link": "Tink/Module/Fields.html", "name": "Tink\\Module\\Fields", "doc": "Namespace Tink\\Module\\Fields"},{"type": "Namespace", "link": "Tink/Module/Transfer.html", "name": "Tink\\Module\\Transfer", "doc": "Namespace Tink\\Module\\Transfer"},{"type": "Namespace", "link": "Tink/Module/Transfer/Rule.html", "name": "Tink\\Module\\Transfer\\Rule", "doc": "Namespace Tink\\Module\\Transfer\\Rule"},{"type": "Namespace", "link": "Tink/Module/Widget.html", "name": "Tink\\Module\\Widget", "doc": "Namespace Tink\\Module\\Widget"},{"type": "Namespace", "link": "Tink/Module/Widget/EachWidget.html", "name": "Tink\\Module\\Widget\\EachWidget", "doc": "Namespace Tink\\Module\\Widget\\EachWidget"},
            {"type": "Interface", "fromName": "Tink\\Helper\\ResponseResult", "fromLink": "Tink/Helper/ResponseResult.html", "link": "Tink/Helper/ResponseResult/ResponseResultInterface.html", "name": "Tink\\Helper\\ResponseResult\\ResponseResultInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Helper\\ResponseResult\\ResponseResultInterface", "fromLink": "Tink/Helper/ResponseResult/ResponseResultInterface.html", "link": "Tink/Helper/ResponseResult/ResponseResultInterface.html#method_getResponse", "name": "Tink\\Helper\\ResponseResult\\ResponseResultInterface::getResponse", "doc": "&quot;Proccess the Response&quot;"},
            
            {"type": "Interface", "fromName": "Tink\\Module\\Fields", "fromLink": "Tink/Module/Fields.html", "link": "Tink/Module/Fields/FieldInterface.html", "name": "Tink\\Module\\Fields\\FieldInterface", "doc": "&quot;Interface FieldInterface&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Fields\\FieldInterface", "fromLink": "Tink/Module/Fields/FieldInterface.html", "link": "Tink/Module/Fields/FieldInterface.html#method_processData", "name": "Tink\\Module\\Fields\\FieldInterface::processData", "doc": "&quot;alter data&quot;"},
            
            {"type": "Interface", "fromName": "Tink\\Module\\Transfer\\Rule", "fromLink": "Tink/Module/Transfer/Rule.html", "link": "Tink/Module/Transfer/Rule/RuleInterface.html", "name": "Tink\\Module\\Transfer\\Rule\\RuleInterface", "doc": "&quot;Interface RuleInterface&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleInterface", "fromLink": "Tink/Module/Transfer/Rule/RuleInterface.html", "link": "Tink/Module/Transfer/Rule/RuleInterface.html#method_validate", "name": "Tink\\Module\\Transfer\\Rule\\RuleInterface::validate", "doc": "&quot;validate rule.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleInterface", "fromLink": "Tink/Module/Transfer/Rule/RuleInterface.html", "link": "Tink/Module/Transfer/Rule/RuleInterface.html#method_getErrorMsg", "name": "Tink\\Module\\Transfer\\Rule\\RuleInterface::getErrorMsg", "doc": "&quot;get Error Message.&quot;"},
            
            {"type": "Interface", "fromName": "Tink\\Module\\Transfer", "fromLink": "Tink/Module/Transfer.html", "link": "Tink/Module/Transfer/TransferOwnerInterface.html", "name": "Tink\\Module\\Transfer\\TransferOwnerInterface", "doc": "&quot;Transfer Owner Interface.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferOwnerInterface", "fromLink": "Tink/Module/Transfer/TransferOwnerInterface.html", "link": "Tink/Module/Transfer/TransferOwnerInterface.html#method_transfer", "name": "Tink\\Module\\Transfer\\TransferOwnerInterface::transfer", "doc": "&quot;transfer money.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferOwnerInterface", "fromLink": "Tink/Module/Transfer/TransferOwnerInterface.html", "link": "Tink/Module/Transfer/TransferOwnerInterface.html#method_canTransfer", "name": "Tink\\Module\\Transfer\\TransferOwnerInterface::canTransfer", "doc": "&quot;Check Can Transfer or not.&quot;"},
            
            {"type": "Interface", "fromName": "Tink\\Module\\Transfer", "fromLink": "Tink/Module/Transfer.html", "link": "Tink/Module/Transfer/TransferResultInterface.html", "name": "Tink\\Module\\Transfer\\TransferResultInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferResultInterface", "fromLink": "Tink/Module/Transfer/TransferResultInterface.html", "link": "Tink/Module/Transfer/TransferResultInterface.html#method_getStatus", "name": "Tink\\Module\\Transfer\\TransferResultInterface::getStatus", "doc": "&quot;get can transfer or not&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferResultInterface", "fromLink": "Tink/Module/Transfer/TransferResultInterface.html", "link": "Tink/Module/Transfer/TransferResultInterface.html#method_getMsg", "name": "Tink\\Module\\Transfer\\TransferResultInterface::getMsg", "doc": "&quot;get the msg of the transfer Result&quot;"},
            
            
            {"type": "Class", "fromName": "Tink\\Command", "fromLink": "Tink/Command.html", "link": "Tink/Command/CacheCommand.html", "name": "Tink\\Command\\CacheCommand", "doc": "&quot;Class CacheCommand\nClear Cache Response|Account|All&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Command\\CacheCommand", "fromLink": "Tink/Command/CacheCommand.html", "link": "Tink/Command/CacheCommand.html#method___construct", "name": "Tink\\Command\\CacheCommand::__construct", "doc": "&quot;CacheCommand constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Command\\CacheCommand", "fromLink": "Tink/Command/CacheCommand.html", "link": "Tink/Command/CacheCommand.html#method_configure", "name": "Tink\\Command\\CacheCommand::configure", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Command\\CacheCommand", "fromLink": "Tink/Command/CacheCommand.html", "link": "Tink/Command/CacheCommand.html#method_execute", "name": "Tink\\Command\\CacheCommand::execute", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Command", "fromLink": "Tink/Command.html", "link": "Tink/Command/ConfigCommand.html", "name": "Tink\\Command\\ConfigCommand", "doc": "&quot;Class ConfigCommand\nConfig:Make Path&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Command\\ConfigCommand", "fromLink": "Tink/Command/ConfigCommand.html", "link": "Tink/Command/ConfigCommand.html#method_configure", "name": "Tink\\Command\\ConfigCommand::configure", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Command\\ConfigCommand", "fromLink": "Tink/Command/ConfigCommand.html", "link": "Tink/Command/ConfigCommand.html#method_execute", "name": "Tink\\Command\\ConfigCommand::execute", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Controller", "fromLink": "Tink/Controller.html", "link": "Tink/Controller/AbstractController.html", "name": "Tink\\Controller\\AbstractController", "doc": "&quot;Abstract Controller for ARD&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Controller\\AbstractController", "fromLink": "Tink/Controller/AbstractController.html", "link": "Tink/Controller/AbstractController.html#method___construct", "name": "Tink\\Controller\\AbstractController::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Controller\\AbstractController", "fromLink": "Tink/Controller/AbstractController.html", "link": "Tink/Controller/AbstractController.html#method___invoke", "name": "Tink\\Controller\\AbstractController::__invoke", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Controller\\AbstractController", "fromLink": "Tink/Controller/AbstractController.html", "link": "Tink/Controller/AbstractController.html#method_action", "name": "Tink\\Controller\\AbstractController::action", "doc": "&quot;the action process the Request&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Controller\\Account", "fromLink": "Tink/Controller/Account.html", "link": "Tink/Controller/Account/Close.html", "name": "Tink\\Controller\\Account\\Close", "doc": "&quot;Class Close route : Delete \/account\/[id]&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Controller\\Account\\Close", "fromLink": "Tink/Controller/Account/Close.html", "link": "Tink/Controller/Account/Close.html#method_action", "name": "Tink\\Controller\\Account\\Close::action", "doc": "&quot;Close Account&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Controller\\Account", "fromLink": "Tink/Controller/Account.html", "link": "Tink/Controller/Account/Info.html", "name": "Tink\\Controller\\Account\\Info", "doc": "&quot;Get Account route: GET \/account\/[id]&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Controller\\Account\\Info", "fromLink": "Tink/Controller/Account/Info.html", "link": "Tink/Controller/Account/Info.html#method_action", "name": "Tink\\Controller\\Account\\Info::action", "doc": "&quot;Get Account Info&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Controller\\Account", "fromLink": "Tink/Controller/Account.html", "link": "Tink/Controller/Account/Open.html", "name": "Tink\\Controller\\Account\\Open", "doc": "&quot;Class Open route: POST \/[ower_id]\/account&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Controller\\Account\\Open", "fromLink": "Tink/Controller/Account/Open.html", "link": "Tink/Controller/Account/Open.html#method_action", "name": "Tink\\Controller\\Account\\Open::action", "doc": "&quot;open account by ower&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Controller\\Account", "fromLink": "Tink/Controller/Account.html", "link": "Tink/Controller/Account/Transfer.html", "name": "Tink\\Controller\\Account\\Transfer", "doc": "&quot;Class Transfer : POST&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Controller\\Account\\Transfer", "fromLink": "Tink/Controller/Account/Transfer.html", "link": "Tink/Controller/Account/Transfer.html#method_action", "name": "Tink\\Controller\\Account\\Transfer::action", "doc": "&quot;Transfer one ac to other other&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Controller\\Account", "fromLink": "Tink/Controller/Account.html", "link": "Tink/Controller/Account/WithDraw.html", "name": "Tink\\Controller\\Account\\WithDraw", "doc": "&quot;Class WithDraw&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Controller\\Account\\WithDraw", "fromLink": "Tink/Controller/Account/WithDraw.html", "link": "Tink/Controller/Account/WithDraw.html#method_action", "name": "Tink\\Controller\\Account\\WithDraw::action", "doc": "&quot;with draw action&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Controller", "fromLink": "Tink/Controller.html", "link": "Tink/Controller/Info.html", "name": "Tink\\Controller\\Info", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Controller\\Info", "fromLink": "Tink/Controller/Info.html", "link": "Tink/Controller/Info.html#method_action", "name": "Tink\\Controller\\Info::action", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Controller\\User", "fromLink": "Tink/Controller/User.html", "link": "Tink/Controller/User/User.html", "name": "Tink\\Controller\\User\\User", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Controller\\User\\User", "fromLink": "Tink/Controller/User/User.html", "link": "Tink/Controller/User/User.html#method_action", "name": "Tink\\Controller\\User\\User::action", "doc": "&quot;the action process the Request&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Event", "fromLink": "Tink/Event.html", "link": "Tink/Event/AccountListenerProvider.html", "name": "Tink\\Event\\AccountListenerProvider", "doc": "&quot;Class AccountListenerProvider&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Event\\AccountListenerProvider", "fromLink": "Tink/Event/AccountListenerProvider.html", "link": "Tink/Event/AccountListenerProvider.html#method___construct", "name": "Tink\\Event\\AccountListenerProvider::__construct", "doc": "&quot;AccountListenerProvider constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Event\\AccountListenerProvider", "fromLink": "Tink/Event/AccountListenerProvider.html", "link": "Tink/Event/AccountListenerProvider.html#method_provideListeners", "name": "Tink\\Event\\AccountListenerProvider::provideListeners", "doc": "&quot;Provide event&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Event\\Account", "fromLink": "Tink/Event/Account.html", "link": "Tink/Event/Account/AccountCache.html", "name": "Tink\\Event\\Account\\AccountCache", "doc": "&quot;Class AccountCache&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Event\\Account\\AccountCache", "fromLink": "Tink/Event/Account/AccountCache.html", "link": "Tink/Event/Account/AccountCache.html#method___construct", "name": "Tink\\Event\\Account\\AccountCache::__construct", "doc": "&quot;AccountCache constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Event\\Account\\AccountCache", "fromLink": "Tink/Event/Account/AccountCache.html", "link": "Tink/Event/Account/AccountCache.html#method_handle", "name": "Tink\\Event\\Account\\AccountCache::handle", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Event\\Account", "fromLink": "Tink/Event/Account.html", "link": "Tink/Event/Account/AccountOpen.html", "name": "Tink\\Event\\Account\\AccountOpen", "doc": "&quot;Class AccountOpen&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Event\\Account\\AccountOpen", "fromLink": "Tink/Event/Account/AccountOpen.html", "link": "Tink/Event/Account/AccountOpen.html#method___construct", "name": "Tink\\Event\\Account\\AccountOpen::__construct", "doc": "&quot;AccountOpen constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Event\\Account\\AccountOpen", "fromLink": "Tink/Event/Account/AccountOpen.html", "link": "Tink/Event/Account/AccountOpen.html#method_handle", "name": "Tink\\Event\\Account\\AccountOpen::handle", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Helper\\ResponseResult", "fromLink": "Tink/Helper/ResponseResult.html", "link": "Tink/Helper/ResponseResult/JsonResponse.html", "name": "Tink\\Helper\\ResponseResult\\JsonResponse", "doc": "&quot;Class Response Result&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Helper\\ResponseResult\\JsonResponse", "fromLink": "Tink/Helper/ResponseResult/JsonResponse.html", "link": "Tink/Helper/ResponseResult/JsonResponse.html#method___construct", "name": "Tink\\Helper\\ResponseResult\\JsonResponse::__construct", "doc": "&quot;Response Result constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Helper\\ResponseResult\\JsonResponse", "fromLink": "Tink/Helper/ResponseResult/JsonResponse.html", "link": "Tink/Helper/ResponseResult/JsonResponse.html#method_getResponse", "name": "Tink\\Helper\\ResponseResult\\JsonResponse::getResponse", "doc": "&quot;Proccess the Response&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Helper\\ResponseResult", "fromLink": "Tink/Helper/ResponseResult.html", "link": "Tink/Helper/ResponseResult/NotFountResponse.html", "name": "Tink\\Helper\\ResponseResult\\NotFountResponse", "doc": "&quot;Class Response Result&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Helper\\ResponseResult\\NotFountResponse", "fromLink": "Tink/Helper/ResponseResult/NotFountResponse.html", "link": "Tink/Helper/ResponseResult/NotFountResponse.html#method___construct", "name": "Tink\\Helper\\ResponseResult\\NotFountResponse::__construct", "doc": "&quot;Response Result constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Helper\\ResponseResult\\NotFountResponse", "fromLink": "Tink/Helper/ResponseResult/NotFountResponse.html", "link": "Tink/Helper/ResponseResult/NotFountResponse.html#method_getResponse", "name": "Tink\\Helper\\ResponseResult\\NotFountResponse::getResponse", "doc": "&quot;NotFound&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Helper\\ResponseResult", "fromLink": "Tink/Helper/ResponseResult.html", "link": "Tink/Helper/ResponseResult/RedirectResponse.html", "name": "Tink\\Helper\\ResponseResult\\RedirectResponse", "doc": "&quot;Class RedirectResponse&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Helper\\ResponseResult\\RedirectResponse", "fromLink": "Tink/Helper/ResponseResult/RedirectResponse.html", "link": "Tink/Helper/ResponseResult/RedirectResponse.html#method___construct", "name": "Tink\\Helper\\ResponseResult\\RedirectResponse::__construct", "doc": "&quot;RedirectResponse constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Helper\\ResponseResult\\RedirectResponse", "fromLink": "Tink/Helper/ResponseResult/RedirectResponse.html", "link": "Tink/Helper/ResponseResult/RedirectResponse.html#method_getResponse", "name": "Tink\\Helper\\ResponseResult\\RedirectResponse::getResponse", "doc": "&quot;301 Redirect with path\nProccess the Response&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Helper\\ResponseResult", "fromLink": "Tink/Helper/ResponseResult.html", "link": "Tink/Helper/ResponseResult/ResponseResultInterface.html", "name": "Tink\\Helper\\ResponseResult\\ResponseResultInterface", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Helper\\ResponseResult\\ResponseResultInterface", "fromLink": "Tink/Helper/ResponseResult/ResponseResultInterface.html", "link": "Tink/Helper/ResponseResult/ResponseResultInterface.html#method_getResponse", "name": "Tink\\Helper\\ResponseResult\\ResponseResultInterface::getResponse", "doc": "&quot;Proccess the Response&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Middleware", "fromLink": "Tink/Middleware.html", "link": "Tink/Middleware/CheckAccount.html", "name": "Tink\\Middleware\\CheckAccount", "doc": "&quot;Description of Account Middleware.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Middleware\\CheckAccount", "fromLink": "Tink/Middleware/CheckAccount.html", "link": "Tink/Middleware/CheckAccount.html#method___construct", "name": "Tink\\Middleware\\CheckAccount::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Middleware\\CheckAccount", "fromLink": "Tink/Middleware/CheckAccount.html", "link": "Tink/Middleware/CheckAccount.html#method___invoke", "name": "Tink\\Middleware\\CheckAccount::__invoke", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Middleware", "fromLink": "Tink/Middleware.html", "link": "Tink/Middleware/CheckOwner.html", "name": "Tink\\Middleware\\CheckOwner", "doc": "&quot;Description of CheckOwner.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Middleware\\CheckOwner", "fromLink": "Tink/Middleware/CheckOwner.html", "link": "Tink/Middleware/CheckOwner.html#method___construct", "name": "Tink\\Middleware\\CheckOwner::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Middleware\\CheckOwner", "fromLink": "Tink/Middleware/CheckOwner.html", "link": "Tink/Middleware/CheckOwner.html#method___invoke", "name": "Tink\\Middleware\\CheckOwner::__invoke", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Middleware", "fromLink": "Tink/Middleware.html", "link": "Tink/Middleware/DBLog.html", "name": "Tink\\Middleware\\DBLog", "doc": "&quot;logs sql.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Middleware\\DBLog", "fromLink": "Tink/Middleware/DBLog.html", "link": "Tink/Middleware/DBLog.html#method___construct", "name": "Tink\\Middleware\\DBLog::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Middleware\\DBLog", "fromLink": "Tink/Middleware/DBLog.html", "link": "Tink/Middleware/DBLog.html#method___invoke", "name": "Tink\\Middleware\\DBLog::__invoke", "doc": "&quot;logRoute app setting determineRouteBeforeAppMiddleware = true.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Middleware", "fromLink": "Tink/Middleware.html", "link": "Tink/Middleware/ResponseCache.html", "name": "Tink\\Middleware\\ResponseCache", "doc": "&quot;Cache Response.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Middleware\\ResponseCache", "fromLink": "Tink/Middleware/ResponseCache.html", "link": "Tink/Middleware/ResponseCache.html#method___construct", "name": "Tink\\Middleware\\ResponseCache::__construct", "doc": "&quot;ResponseCache constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Middleware\\ResponseCache", "fromLink": "Tink/Middleware/ResponseCache.html", "link": "Tink/Middleware/ResponseCache.html#method___invoke", "name": "Tink\\Middleware\\ResponseCache::__invoke", "doc": "&quot;add cache for response, app setting determineRouteBeforeAppMiddleware = true.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Model", "fromLink": "Tink/Model.html", "link": "Tink/Model/Account.html", "name": "Tink\\Model\\Account", "doc": "&quot;This is the database Account table&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Model\\Account", "fromLink": "Tink/Model/Account.html", "link": "Tink/Model/Account.html#method_checkWithDraw", "name": "Tink\\Model\\Account::checkWithDraw", "doc": "&quot;Check have enough money for with draw.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Model\\Account", "fromLink": "Tink/Model/Account.html", "link": "Tink/Model/Account.html#method_calBalance", "name": "Tink\\Model\\Account::calBalance", "doc": "&quot;Cal Account Balance after some action.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Model\\Account", "fromLink": "Tink/Model/Account.html", "link": "Tink/Model/Account.html#method_history", "name": "Tink\\Model\\Account::history", "doc": "&quot;Account HasMany History.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Model", "fromLink": "Tink/Model.html", "link": "Tink/Model/History.html", "name": "Tink\\Model\\History", "doc": "&quot;This is the database History table&quot;"},
                    
            {"type": "Class", "fromName": "Tink\\Model", "fromLink": "Tink/Model.html", "link": "Tink/Model/Owner.html", "name": "Tink\\Model\\Owner", "doc": "&quot;This is the database Owner table&quot;"},
                    
            {"type": "Class", "fromName": "Tink\\Model", "fromLink": "Tink/Model.html", "link": "Tink/Model/Page.html", "name": "Tink\\Model\\Page", "doc": "&quot;This is the database Page table&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Model\\Page", "fromLink": "Tink/Model/Page.html", "link": "Tink/Model/Page.html#method_fields", "name": "Tink\\Model\\Page::fields", "doc": "&quot;GET ALL field&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Model", "fromLink": "Tink/Model.html", "link": "Tink/Model/PageField.html", "name": "Tink\\Model\\PageField", "doc": "&quot;This is the database Page table&quot;"},
                    
            {"type": "Class", "fromName": "Tink\\Model", "fromLink": "Tink/Model.html", "link": "Tink/Model/Permission.html", "name": "Tink\\Model\\Permission", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "Tink\\Model", "fromLink": "Tink/Model.html", "link": "Tink/Model/Role.html", "name": "Tink\\Model\\Role", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Model\\Role", "fromLink": "Tink/Model/Role.html", "link": "Tink/Model/Role.html#method_permission", "name": "Tink\\Model\\Role::permission", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Model\\Role", "fromLink": "Tink/Model/Role.html", "link": "Tink/Model/Role.html#method_hasRole", "name": "Tink\\Model\\Role::hasRole", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Model\\Role", "fromLink": "Tink/Model/Role.html", "link": "Tink/Model/Role.html#method_hasPermission", "name": "Tink\\Model\\Role::hasPermission", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Model", "fromLink": "Tink/Model.html", "link": "Tink/Model/User.html", "name": "Tink\\Model\\User", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Model\\User", "fromLink": "Tink/Model/User.html", "link": "Tink/Model/User.html#method_role", "name": "Tink\\Model\\User::role", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Model\\User", "fromLink": "Tink/Model/User.html", "link": "Tink/Model/User.html#method_hasRole", "name": "Tink\\Model\\User::hasRole", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Model\\User", "fromLink": "Tink/Model/User.html", "link": "Tink/Model/User.html#method_hasPermission", "name": "Tink\\Model\\User::hasPermission", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module", "fromLink": "Tink/Module.html", "link": "Tink/Module/AccountModule.html", "name": "Tink\\Module\\AccountModule", "doc": "&quot;Account Module\nCURD - for Account Table&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\AccountModule", "fromLink": "Tink/Module/AccountModule.html", "link": "Tink/Module/AccountModule.html#method___construct", "name": "Tink\\Module\\AccountModule::__construct", "doc": "&quot;AccountModule constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\AccountModule", "fromLink": "Tink/Module/AccountModule.html", "link": "Tink/Module/AccountModule.html#method_create", "name": "Tink\\Module\\AccountModule::create", "doc": "&quot;Create Account.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\AccountModule", "fromLink": "Tink/Module/AccountModule.html", "link": "Tink/Module/AccountModule.html#method_close", "name": "Tink\\Module\\AccountModule::close", "doc": "&quot;Close Account.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\AccountModule", "fromLink": "Tink/Module/AccountModule.html", "link": "Tink/Module/AccountModule.html#method_amountChange", "name": "Tink\\Module\\AccountModule::amountChange", "doc": "&quot;when change amount - add history.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\AccountModule", "fromLink": "Tink/Module/AccountModule.html", "link": "Tink/Module/AccountModule.html#method_validator", "name": "Tink\\Module\\AccountModule::validator", "doc": "&quot;Validator - before create account.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\AccountModule", "fromLink": "Tink/Module/AccountModule.html", "link": "Tink/Module/AccountModule.html#method_getAcInfo", "name": "Tink\\Module\\AccountModule::getAcInfo", "doc": "&quot;Get Account info. Cache Key : Account\/{id}&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Fields", "fromLink": "Tink/Module/Fields.html", "link": "Tink/Module/Fields/FieldInterface.html", "name": "Tink\\Module\\Fields\\FieldInterface", "doc": "&quot;Interface FieldInterface&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Fields\\FieldInterface", "fromLink": "Tink/Module/Fields/FieldInterface.html", "link": "Tink/Module/Fields/FieldInterface.html#method_processData", "name": "Tink\\Module\\Fields\\FieldInterface::processData", "doc": "&quot;alter data&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Fields", "fromLink": "Tink/Module/Fields.html", "link": "Tink/Module/Fields/FieldsManager.html", "name": "Tink\\Module\\Fields\\FieldsManager", "doc": "&quot;Class FieldsManager - process each Field&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Fields\\FieldsManager", "fromLink": "Tink/Module/Fields/FieldsManager.html", "link": "Tink/Module/Fields/FieldsManager.html#method___construct", "name": "Tink\\Module\\Fields\\FieldsManager::__construct", "doc": "&quot;FieldsManager constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Fields\\FieldsManager", "fromLink": "Tink/Module/Fields/FieldsManager.html", "link": "Tink/Module/Fields/FieldsManager.html#method_setFields", "name": "Tink\\Module\\Fields\\FieldsManager::setFields", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Fields\\FieldsManager", "fromLink": "Tink/Module/Fields/FieldsManager.html", "link": "Tink/Module/Fields/FieldsManager.html#method_getFields", "name": "Tink\\Module\\Fields\\FieldsManager::getFields", "doc": "&quot;return all fields&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Fields\\FieldsManager", "fromLink": "Tink/Module/Fields/FieldsManager.html", "link": "Tink/Module/Fields/FieldsManager.html#method_processFields", "name": "Tink\\Module\\Fields\\FieldsManager::processFields", "doc": "&quot;process each fields by field type&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Fields", "fromLink": "Tink/Module/Fields.html", "link": "Tink/Module/Fields/HtmlField.html", "name": "Tink\\Module\\Fields\\HtmlField", "doc": "&quot;Class HtmlField - strip tage for html&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Fields\\HtmlField", "fromLink": "Tink/Module/Fields/HtmlField.html", "link": "Tink/Module/Fields/HtmlField.html#method___construct", "name": "Tink\\Module\\Fields\\HtmlField::__construct", "doc": "&quot;HtmlField constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Fields\\HtmlField", "fromLink": "Tink/Module/Fields/HtmlField.html", "link": "Tink/Module/Fields/HtmlField.html#method_processData", "name": "Tink\\Module\\Fields\\HtmlField::processData", "doc": "&quot;strip_tags for html&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Fields", "fromLink": "Tink/Module/Fields.html", "link": "Tink/Module/Fields/InterLinkField.html", "name": "Tink\\Module\\Fields\\InterLinkField", "doc": "&quot;Class InterLinkField&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Fields\\InterLinkField", "fromLink": "Tink/Module/Fields/InterLinkField.html", "link": "Tink/Module/Fields/InterLinkField.html#method___construct", "name": "Tink\\Module\\Fields\\InterLinkField::__construct", "doc": "&quot;InterLinkField constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Fields\\InterLinkField", "fromLink": "Tink/Module/Fields/InterLinkField.html", "link": "Tink/Module/Fields/InterLinkField.html#method_processData", "name": "Tink\\Module\\Fields\\InterLinkField::processData", "doc": "&quot;get Page uri&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module", "fromLink": "Tink/Module.html", "link": "Tink/Module/HistoryModule.html", "name": "Tink\\Module\\HistoryModule", "doc": "&quot;History Module - CURD for History table.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\HistoryModule", "fromLink": "Tink/Module/HistoryModule.html", "link": "Tink/Module/HistoryModule.html#method___construct", "name": "Tink\\Module\\HistoryModule::__construct", "doc": "&quot;HistoryModule constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\HistoryModule", "fromLink": "Tink/Module/HistoryModule.html", "link": "Tink/Module/HistoryModule.html#method_create", "name": "Tink\\Module\\HistoryModule::create", "doc": "&quot;Create History.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\HistoryModule", "fromLink": "Tink/Module/HistoryModule.html", "link": "Tink/Module/HistoryModule.html#method_validator", "name": "Tink\\Module\\HistoryModule::validator", "doc": "&quot;Validator rule.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module", "fromLink": "Tink/Module.html", "link": "Tink/Module/OwnerModule.html", "name": "Tink\\Module\\OwnerModule", "doc": "&quot;Owner Module - CURD for Owner table.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\OwnerModule", "fromLink": "Tink/Module/OwnerModule.html", "link": "Tink/Module/OwnerModule.html#method___construct", "name": "Tink\\Module\\OwnerModule::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\OwnerModule", "fromLink": "Tink/Module/OwnerModule.html", "link": "Tink/Module/OwnerModule.html#method_getOwnerInfo", "name": "Tink\\Module\\OwnerModule::getOwnerInfo", "doc": "&quot;Get Owner info.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module", "fromLink": "Tink/Module.html", "link": "Tink/Module/PageModule.html", "name": "Tink\\Module\\PageModule", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\PageModule", "fromLink": "Tink/Module/PageModule.html", "link": "Tink/Module/PageModule.html#method___construct", "name": "Tink\\Module\\PageModule::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\PageModule", "fromLink": "Tink/Module/PageModule.html", "link": "Tink/Module/PageModule.html#method_getPageByUri", "name": "Tink\\Module\\PageModule::getPageByUri", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\PageModule", "fromLink": "Tink/Module/PageModule.html", "link": "Tink/Module/PageModule.html#method_getPageByID", "name": "Tink\\Module\\PageModule::getPageByID", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\PageModule", "fromLink": "Tink/Module/PageModule.html", "link": "Tink/Module/PageModule.html#method_getPageWidget", "name": "Tink\\Module\\PageModule::getPageWidget", "doc": "&quot;get All widget for this page&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer", "fromLink": "Tink/Module/Transfer.html", "link": "Tink/Module/Transfer/BuildTransfer.html", "name": "Tink\\Module\\Transfer\\BuildTransfer", "doc": "&quot;Build Transfer Class.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\BuildTransfer", "fromLink": "Tink/Module/Transfer/BuildTransfer.html", "link": "Tink/Module/Transfer/BuildTransfer.html#method___construct", "name": "Tink\\Module\\Transfer\\BuildTransfer::__construct", "doc": "&quot;BuildTransfer constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\BuildTransfer", "fromLink": "Tink/Module/Transfer/BuildTransfer.html", "link": "Tink/Module/Transfer/BuildTransfer.html#method_create", "name": "Tink\\Module\\Transfer\\BuildTransfer::create", "doc": "&quot;Get Transfer Class.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer\\Rule", "fromLink": "Tink/Module/Transfer/Rule.html", "link": "Tink/Module/Transfer/Rule/BuildRulesArray.html", "name": "Tink\\Module\\Transfer\\Rule\\BuildRulesArray", "doc": "&quot;Setup the Rule for special case.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\BuildRulesArray", "fromLink": "Tink/Module/Transfer/Rule/BuildRulesArray.html", "link": "Tink/Module/Transfer/Rule/BuildRulesArray.html#method___construct", "name": "Tink\\Module\\Transfer\\Rule\\BuildRulesArray::__construct", "doc": "&quot;BuildRulesArray constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\BuildRulesArray", "fromLink": "Tink/Module/Transfer/Rule/BuildRulesArray.html", "link": "Tink/Module/Transfer/Rule/BuildRulesArray.html#method_buildSameOwnerRule", "name": "Tink\\Module\\Transfer\\Rule\\BuildRulesArray::buildSameOwnerRule", "doc": "&quot;Same Owner Rules.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\BuildRulesArray", "fromLink": "Tink/Module/Transfer/Rule/BuildRulesArray.html", "link": "Tink/Module/Transfer/Rule/BuildRulesArray.html#method_buildOtherOwnerRule", "name": "Tink\\Module\\Transfer\\Rule\\BuildRulesArray::buildOtherOwnerRule", "doc": "&quot;other Owner Rules.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer\\Rule", "fromLink": "Tink/Module/Transfer/Rule.html", "link": "Tink/Module/Transfer/Rule/RuleApiApprove.html", "name": "Tink\\Module\\Transfer\\Rule\\RuleApiApprove", "doc": "&quot;Description of RuleWithDrawAmount.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleApiApprove", "fromLink": "Tink/Module/Transfer/Rule/RuleApiApprove.html", "link": "Tink/Module/Transfer/Rule/RuleApiApprove.html#method___construct", "name": "Tink\\Module\\Transfer\\Rule\\RuleApiApprove::__construct", "doc": "&quot;RuleApiApprove constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleApiApprove", "fromLink": "Tink/Module/Transfer/Rule/RuleApiApprove.html", "link": "Tink/Module/Transfer/Rule/RuleApiApprove.html#method_validate", "name": "Tink\\Module\\Transfer\\Rule\\RuleApiApprove::validate", "doc": "&quot;Validate this rule - by api&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleApiApprove", "fromLink": "Tink/Module/Transfer/Rule/RuleApiApprove.html", "link": "Tink/Module/Transfer/Rule/RuleApiApprove.html#method_getErrorMsg", "name": "Tink\\Module\\Transfer\\Rule\\RuleApiApprove::getErrorMsg", "doc": "&quot;Get Error Message&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer\\Rule", "fromLink": "Tink/Module/Transfer/Rule.html", "link": "Tink/Module/Transfer/Rule/RuleDailyLimit.html", "name": "Tink\\Module\\Transfer\\Rule\\RuleDailyLimit", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleDailyLimit", "fromLink": "Tink/Module/Transfer/Rule/RuleDailyLimit.html", "link": "Tink/Module/Transfer/Rule/RuleDailyLimit.html#method___construct", "name": "Tink\\Module\\Transfer\\Rule\\RuleDailyLimit::__construct", "doc": "&quot;RuleDailyLimit constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleDailyLimit", "fromLink": "Tink/Module/Transfer/Rule/RuleDailyLimit.html", "link": "Tink/Module/Transfer/Rule/RuleDailyLimit.html#method_validate", "name": "Tink\\Module\\Transfer\\Rule\\RuleDailyLimit::validate", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleDailyLimit", "fromLink": "Tink/Module/Transfer/Rule/RuleDailyLimit.html", "link": "Tink/Module/Transfer/Rule/RuleDailyLimit.html#method_getErrorMsg", "name": "Tink\\Module\\Transfer\\Rule\\RuleDailyLimit::getErrorMsg", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer\\Rule", "fromLink": "Tink/Module/Transfer/Rule.html", "link": "Tink/Module/Transfer/Rule/RuleInterface.html", "name": "Tink\\Module\\Transfer\\Rule\\RuleInterface", "doc": "&quot;Interface RuleInterface&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleInterface", "fromLink": "Tink/Module/Transfer/Rule/RuleInterface.html", "link": "Tink/Module/Transfer/Rule/RuleInterface.html#method_validate", "name": "Tink\\Module\\Transfer\\Rule\\RuleInterface::validate", "doc": "&quot;validate rule.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleInterface", "fromLink": "Tink/Module/Transfer/Rule/RuleInterface.html", "link": "Tink/Module/Transfer/Rule/RuleInterface.html#method_getErrorMsg", "name": "Tink\\Module\\Transfer\\Rule\\RuleInterface::getErrorMsg", "doc": "&quot;get Error Message.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer\\Rule", "fromLink": "Tink/Module/Transfer/Rule.html", "link": "Tink/Module/Transfer/Rule/RuleWithDrawAmount.html", "name": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmount", "doc": "&quot;Class RuleWithDrawAmount&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmount", "fromLink": "Tink/Module/Transfer/Rule/RuleWithDrawAmount.html", "link": "Tink/Module/Transfer/Rule/RuleWithDrawAmount.html#method___construct", "name": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmount::__construct", "doc": "&quot;RuleWithDrawAmount constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmount", "fromLink": "Tink/Module/Transfer/Rule/RuleWithDrawAmount.html", "link": "Tink/Module/Transfer/Rule/RuleWithDrawAmount.html#method_validate", "name": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmount::validate", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmount", "fromLink": "Tink/Module/Transfer/Rule/RuleWithDrawAmount.html", "link": "Tink/Module/Transfer/Rule/RuleWithDrawAmount.html#method_getErrorMsg", "name": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmount::getErrorMsg", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer\\Rule", "fromLink": "Tink/Module/Transfer/Rule.html", "link": "Tink/Module/Transfer/Rule/RuleWithDrawAmountExtraCharge.html", "name": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmountExtraCharge", "doc": "&quot;Description of RuleWithDrawAmount.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmountExtraCharge", "fromLink": "Tink/Module/Transfer/Rule/RuleWithDrawAmountExtraCharge.html", "link": "Tink/Module/Transfer/Rule/RuleWithDrawAmountExtraCharge.html#method_validate", "name": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmountExtraCharge::validate", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmountExtraCharge", "fromLink": "Tink/Module/Transfer/Rule/RuleWithDrawAmountExtraCharge.html", "link": "Tink/Module/Transfer/Rule/RuleWithDrawAmountExtraCharge.html#method_getErrorMsg", "name": "Tink\\Module\\Transfer\\Rule\\RuleWithDrawAmountExtraCharge::getErrorMsg", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer", "fromLink": "Tink/Module/Transfer.html", "link": "Tink/Module/Transfer/Transfer.html", "name": "Tink\\Module\\Transfer\\Transfer", "doc": "&quot;Transfer Class.&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Transfer", "fromLink": "Tink/Module/Transfer/Transfer.html", "link": "Tink/Module/Transfer/Transfer.html#method___construct", "name": "Tink\\Module\\Transfer\\Transfer::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\Transfer", "fromLink": "Tink/Module/Transfer/Transfer.html", "link": "Tink/Module/Transfer/Transfer.html#method_canTransfer", "name": "Tink\\Module\\Transfer\\Transfer::canTransfer", "doc": "&quot;Check Can Transfer or not.&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer", "fromLink": "Tink/Module/Transfer.html", "link": "Tink/Module/Transfer/TransferOtherOwner.html", "name": "Tink\\Module\\Transfer\\TransferOtherOwner", "doc": "&quot;Class TransferOtherOwner&quot;"},
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
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferResultInterface", "fromLink": "Tink/Module/Transfer/TransferResultInterface.html", "link": "Tink/Module/Transfer/TransferResultInterface.html#method_getStatus", "name": "Tink\\Module\\Transfer\\TransferResultInterface::getStatus", "doc": "&quot;get can transfer or not&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferResultInterface", "fromLink": "Tink/Module/Transfer/TransferResultInterface.html", "link": "Tink/Module/Transfer/TransferResultInterface.html#method_getMsg", "name": "Tink\\Module\\Transfer\\TransferResultInterface::getMsg", "doc": "&quot;get the msg of the transfer Result&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Transfer", "fromLink": "Tink/Module/Transfer.html", "link": "Tink/Module/Transfer/TransferSameOwner.html", "name": "Tink\\Module\\Transfer\\TransferSameOwner", "doc": "&quot;Class TransferSameOwner&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferSameOwner", "fromLink": "Tink/Module/Transfer/TransferSameOwner.html", "link": "Tink/Module/Transfer/TransferSameOwner.html#method_transfer", "name": "Tink\\Module\\Transfer\\TransferSameOwner::transfer", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Transfer\\TransferSameOwner", "fromLink": "Tink/Module/Transfer/TransferSameOwner.html", "link": "Tink/Module/Transfer/TransferSameOwner.html#method_canTransfer", "name": "Tink\\Module\\Transfer\\TransferSameOwner::canTransfer", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module", "fromLink": "Tink/Module.html", "link": "Tink/Module/UserManager.html", "name": "Tink\\Module\\UserManager", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\UserManager", "fromLink": "Tink/Module/UserManager.html", "link": "Tink/Module/UserManager.html#method___construct", "name": "Tink\\Module\\UserManager::__construct", "doc": "&quot;UserManager constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\UserManager", "fromLink": "Tink/Module/UserManager.html", "link": "Tink/Module/UserManager.html#method_findByID", "name": "Tink\\Module\\UserManager::findByID", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module", "fromLink": "Tink/Module.html", "link": "Tink/Module/WidgetManager.html", "name": "Tink\\Module\\WidgetManager", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\WidgetManager", "fromLink": "Tink/Module/WidgetManager.html", "link": "Tink/Module/WidgetManager.html#method___construct", "name": "Tink\\Module\\WidgetManager::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\WidgetManager", "fromLink": "Tink/Module/WidgetManager.html", "link": "Tink/Module/WidgetManager.html#method_getWidgetByPage", "name": "Tink\\Module\\WidgetManager::getWidgetByPage", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Widget", "fromLink": "Tink/Module/Widget.html", "link": "Tink/Module/Widget/AbstractWidget.html", "name": "Tink\\Module\\Widget\\AbstractWidget", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Widget\\AbstractWidget", "fromLink": "Tink/Module/Widget/AbstractWidget.html", "link": "Tink/Module/Widget/AbstractWidget.html#method___construct", "name": "Tink\\Module\\Widget\\AbstractWidget::__construct", "doc": "&quot;ContentTypeWidget constructor.&quot;"},
                    {"type": "Method", "fromName": "Tink\\Module\\Widget\\AbstractWidget", "fromLink": "Tink/Module/Widget/AbstractWidget.html", "link": "Tink/Module/Widget/AbstractWidget.html#method_getWidget", "name": "Tink\\Module\\Widget\\AbstractWidget::getWidget", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Widget", "fromLink": "Tink/Module/Widget.html", "link": "Tink/Module/Widget/ContentTypeWidget.html", "name": "Tink\\Module\\Widget\\ContentTypeWidget", "doc": "&quot;Class ContentTypeWidget&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Widget\\ContentTypeWidget", "fromLink": "Tink/Module/Widget/ContentTypeWidget.html", "link": "Tink/Module/Widget/ContentTypeWidget.html#method_getWidget", "name": "Tink\\Module\\Widget\\ContentTypeWidget::getWidget", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Widget\\EachWidget", "fromLink": "Tink/Module/Widget/EachWidget.html", "link": "Tink/Module/Widget/EachWidget/ContactWidget.html", "name": "Tink\\Module\\Widget\\EachWidget\\ContactWidget", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Widget\\EachWidget\\ContactWidget", "fromLink": "Tink/Module/Widget/EachWidget/ContactWidget.html", "link": "Tink/Module/Widget/EachWidget/ContactWidget.html#method_getWeightData", "name": "Tink\\Module\\Widget\\EachWidget\\ContactWidget::getWeightData", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Widget\\EachWidget", "fromLink": "Tink/Module/Widget/EachWidget.html", "link": "Tink/Module/Widget/EachWidget/FrontPageWelcomeWidget.html", "name": "Tink\\Module\\Widget\\EachWidget\\FrontPageWelcomeWidget", "doc": "&quot;For content type = FrontPage&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Widget\\EachWidget\\FrontPageWelcomeWidget", "fromLink": "Tink/Module/Widget/EachWidget/FrontPageWelcomeWidget.html", "link": "Tink/Module/Widget/EachWidget/FrontPageWelcomeWidget.html#method_getWeightData", "name": "Tink\\Module\\Widget\\EachWidget\\FrontPageWelcomeWidget::getWeightData", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Widget\\EachWidget", "fromLink": "Tink/Module/Widget/EachWidget.html", "link": "Tink/Module/Widget/EachWidget/MainMenuWidget.html", "name": "Tink\\Module\\Widget\\EachWidget\\MainMenuWidget", "doc": "&quot;Main Menu Widget for global&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Widget\\EachWidget\\MainMenuWidget", "fromLink": "Tink/Module/Widget/EachWidget/MainMenuWidget.html", "link": "Tink/Module/Widget/EachWidget/MainMenuWidget.html#method_getWeightData", "name": "Tink\\Module\\Widget\\EachWidget\\MainMenuWidget::getWeightData", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Widget\\EachWidget", "fromLink": "Tink/Module/Widget/EachWidget.html", "link": "Tink/Module/Widget/EachWidget/MyInfoWidget.html", "name": "Tink\\Module\\Widget\\EachWidget\\MyInfoWidget", "doc": "&quot;Info Widget, no need di container&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Widget\\EachWidget\\MyInfoWidget", "fromLink": "Tink/Module/Widget/EachWidget/MyInfoWidget.html", "link": "Tink/Module/Widget/EachWidget/MyInfoWidget.html#method_getWeightData", "name": "Tink\\Module\\Widget\\EachWidget\\MyInfoWidget::getWeightData", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "Tink\\Module\\Widget", "fromLink": "Tink/Module/Widget.html", "link": "Tink/Module/Widget/GlobalWidget.html", "name": "Tink\\Module\\Widget\\GlobalWidget", "doc": "&quot;Class GlobalWidget - define and get the global widge&quot;"},
                                                        {"type": "Method", "fromName": "Tink\\Module\\Widget\\GlobalWidget", "fromLink": "Tink/Module/Widget/GlobalWidget.html", "link": "Tink/Module/Widget/GlobalWidget.html#method_getWidget", "name": "Tink\\Module\\Widget\\GlobalWidget::getWidget", "doc": "&quot;all Goblal data define here&quot;"},
            
            
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
    }
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


