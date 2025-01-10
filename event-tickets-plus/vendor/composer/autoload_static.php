<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d3b04e4a5b0fcb2b56e6e967bb39a35
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TEC\\Tickets_Wallet_Plus\\' => 24,
            'TEC\\Tickets_Plus\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TEC\\Tickets_Wallet_Plus\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus',
        ),
        'TEC\\Tickets_Plus\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Tickets_Plus',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Datamatrix' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/barcodes/datamatrix.php',
        'PDF417' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/barcodes/pdf417.php',
        'QRcode' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/barcodes/qrcode.php',
        'TCPDF' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf.php',
        'TCPDF2DBarcode' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_barcodes_2d.php',
        'TCPDFBarcode' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_barcodes_1d.php',
        'TCPDF_COLORS' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_colors.php',
        'TCPDF_FILTERS' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_filters.php',
        'TCPDF_FONTS' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_fonts.php',
        'TCPDF_FONT_DATA' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_font_data.php',
        'TCPDF_IMAGES' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_images.php',
        'TCPDF_IMPORT' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_import.php',
        'TCPDF_PARSER' => __DIR__ . '/..' . '/tecnickcom/tcpdf/tcpdf_parser.php',
        'TCPDF_STATIC' => __DIR__ . '/..' . '/tecnickcom/tcpdf/include/tcpdf_static.php',
        'TEC\\Tickets_Plus\\Admin\\Tabs\\Attendee_Registration' => __DIR__ . '/../..' . '/src/Tickets_Plus/Admin/Tabs/Attendee_Registration.php',
        'TEC\\Tickets_Plus\\Admin\\Tabs\\Integrations' => __DIR__ . '/../..' . '/src/Tickets_Plus/Admin/Tabs/Integrations.php',
        'TEC\\Tickets_Plus\\Admin\\Tabs\\Provider' => __DIR__ . '/../..' . '/src/Tickets_Plus/Admin/Tabs/Provider.php',
        'TEC\\Tickets_Plus\\Assets' => __DIR__ . '/../..' . '/src/Tickets_Plus/Assets.php',
        'TEC\\Tickets_Plus\\Commerce\\Assets' => __DIR__ . '/../..' . '/src/Tickets_Plus/Commerce/Assets.php',
        'TEC\\Tickets_Plus\\Commerce\\Attendee' => __DIR__ . '/../..' . '/src/Tickets_Plus/Commerce/Attendee.php',
        'TEC\\Tickets_Plus\\Commerce\\Attendee_Registration\\Hooks' => __DIR__ . '/../..' . '/src/Tickets_Plus/Commerce/Attendee_Registration/Hooks.php',
        'TEC\\Tickets_Plus\\Commerce\\Attendee_Registration\\Provider' => __DIR__ . '/../..' . '/src/Tickets_Plus/Commerce/Attendee_Registration/Provider.php',
        'TEC\\Tickets_Plus\\Commerce\\Gateways\\Stripe\\Hooks' => __DIR__ . '/../..' . '/src/Tickets_Plus/Commerce/Gateways/Stripe/Hooks.php',
        'TEC\\Tickets_Plus\\Commerce\\Gateways\\Stripe\\Provider' => __DIR__ . '/../..' . '/src/Tickets_Plus/Commerce/Gateways/Stripe/Provider.php',
        'TEC\\Tickets_Plus\\Commerce\\Gateways\\Stripe\\Settings' => __DIR__ . '/../..' . '/src/Tickets_Plus/Commerce/Gateways/Stripe/Settings.php',
        'TEC\\Tickets_Plus\\Commerce\\Hooks' => __DIR__ . '/../..' . '/src/Tickets_Plus/Commerce/Hooks.php',
        'TEC\\Tickets_Plus\\Commerce\\Order' => __DIR__ . '/../..' . '/src/Tickets_Plus/Commerce/Order.php',
        'TEC\\Tickets_Plus\\Commerce\\Provider' => __DIR__ . '/../..' . '/src/Tickets_Plus/Commerce/Provider.php',
        'TEC\\Tickets_Plus\\Emails\\Email\\Components' => __DIR__ . '/../..' . '/src/Tickets_Plus/Emails/Email/Components.php',
        'TEC\\Tickets_Plus\\Emails\\Email\\RSVP' => __DIR__ . '/../..' . '/src/Tickets_Plus/Emails/Email/RSVP.php',
        'TEC\\Tickets_Plus\\Emails\\Email\\Ticket' => __DIR__ . '/../..' . '/src/Tickets_Plus/Emails/Email/Ticket.php',
        'TEC\\Tickets_Plus\\Emails\\Hooks' => __DIR__ . '/../..' . '/src/Tickets_Plus/Emails/Hooks.php',
        'TEC\\Tickets_Plus\\Emails\\Provider' => __DIR__ . '/../..' . '/src/Tickets_Plus/Emails/Provider.php',
        'TEC\\Tickets_Plus\\Emails\\Settings' => __DIR__ . '/../..' . '/src/Tickets_Plus/Emails/Settings.php',
        'TEC\\Tickets_Plus\\Flexible_Tickets\\Provider' => __DIR__ . '/../..' . '/src/Tickets_Plus/Flexible_Tickets/Provider.php',
        'TEC\\Tickets_Plus\\Flexible_Tickets\\Series_Passes' => __DIR__ . '/../..' . '/src/Tickets_Plus/Flexible_Tickets/Series_Passes.php',
        'TEC\\Tickets_Plus\\Flexible_Tickets\\WooCommerce' => __DIR__ . '/../..' . '/src/Tickets_Plus/Flexible_Tickets/WooCommerce.php',
        'TEC\\Tickets_Plus\\Hooks' => __DIR__ . '/../..' . '/src/Tickets_Plus/Hooks.php',
        'TEC\\Tickets_Plus\\Integrations\\Controller' => __DIR__ . '/../..' . '/src/Tickets_Plus/Integrations/Controller.php',
        'TEC\\Tickets_Plus\\Integrations\\Event_Tickets\\Duplicate_Ticket_Provider' => __DIR__ . '/../..' . '/src/Tickets_Plus/Integrations/Event_Tickets/Duplicate_Ticket_Provider.php',
        'TEC\\Tickets_Plus\\Integrations\\Event_Tickets\\Site_Health\\Controller' => __DIR__ . '/../..' . '/src/Tickets_Plus/Integrations/Event_Tickets/Site_Health/Controller.php',
        'TEC\\Tickets_Plus\\Integrations\\Event_Tickets\\Site_Health\\Event_Tickets_Plus_Subsection' => __DIR__ . '/../..' . '/src/Tickets_Plus/Integrations/Event_Tickets/Site_Health/Event_Tickets_Plus_Subsection.php',
        'TEC\\Tickets_Plus\\Integrations\\Integration_Abstract' => __DIR__ . '/../..' . '/src/Tickets_Plus/Integrations/Integration_Abstract.php',
        'TEC\\Tickets_Plus\\Integrations\\Tickets_Wallet_Plus\\Controller' => __DIR__ . '/../..' . '/src/Tickets_Plus/Integrations/Tickets_Wallet_Plus/Controller.php',
        'TEC\\Tickets_Plus\\Integrations\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Attendee_Registration_Fields_Data' => __DIR__ . '/../..' . '/src/Tickets_Plus/Integrations/Tickets_Wallet_Plus/Passes/Apple_Wallet/Attendee_Registration_Fields_Data.php',
        'TEC\\Tickets_Plus\\Integrations\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Attendee_Registration_Fields_Setting' => __DIR__ . '/../..' . '/src/Tickets_Plus/Integrations/Tickets_Wallet_Plus/Passes/Apple_Wallet/Attendee_Registration_Fields_Setting.php',
        'TEC\\Tickets_Plus\\Integrations\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Settings' => __DIR__ . '/../..' . '/src/Tickets_Plus/Integrations/Tickets_Wallet_Plus/Passes/Apple_Wallet/Settings.php',
        'TEC\\Tickets_Plus\\Integrations\\Tickets_Wallet_Plus\\Passes\\Pdf' => __DIR__ . '/../..' . '/src/Tickets_Plus/Integrations/Tickets_Wallet_Plus/Passes/Pdf.php',
        'TEC\\Tickets_Plus\\Integrations\\Tickets_Wallet_Plus\\Passes\\Pdf\\Attendee_Registration_Fields_Setting' => __DIR__ . '/../..' . '/src/Tickets_Plus/Integrations/Tickets_Wallet_Plus/Passes/Pdf/Attendee_Registration_Fields_Setting.php',
        'TEC\\Tickets_Plus\\Integrations\\Tickets_Wallet_Plus_Merge_Provider' => __DIR__ . '/../..' . '/src/Tickets_Plus/Integrations/Tickets_Wallet_Plus_Merge_Provider.php',
        'TEC\\Tickets_Plus\\Libraries\\Controller' => __DIR__ . '/../..' . '/src/Tickets_Plus/Libraries/Controller.php',
        'TEC\\Tickets_Plus\\Libraries\\Uplink_Controller' => __DIR__ . '/../..' . '/src/Tickets_Plus/Libraries/Uplink_Controller.php',
        'TEC\\Tickets_Plus\\Provider' => __DIR__ . '/../..' . '/src/Tickets_Plus/Provider.php',
        'TEC\\Tickets_Plus\\Seating\\Attendee' => __DIR__ . '/../..' . '/src/Tickets_Plus/Seating/Attendee.php',
        'TEC\\Tickets_Plus\\Seating\\Controller' => __DIR__ . '/../..' . '/src/Tickets_Plus/Seating/Controller.php',
        'TEC\\Tickets_Plus\\Ticket_Cache_Controller' => __DIR__ . '/../..' . '/src/Tickets_Plus/Ticket_Cache_Controller.php',
        'TEC\\Tickets_Wallet_Plus\\Admin\\Controller' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Admin/Controller.php',
        'TEC\\Tickets_Wallet_Plus\\Admin\\Modifiers\\Add_QR_Settings' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Admin/Modifiers/Add_QR_Settings.php',
        'TEC\\Tickets_Wallet_Plus\\Admin\\Plugin_Action_Links' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Admin/Plugin_Action_Links.php',
        'TEC\\Tickets_Wallet_Plus\\Admin\\Settings\\Controller' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Admin/Settings/Controller.php',
        'TEC\\Tickets_Wallet_Plus\\Admin\\Settings\\Wallet_Tab' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Admin/Settings/Wallet_Tab.php',
        'TEC\\Tickets_Wallet_Plus\\Assets' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Assets.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Passes\\Controller_Abstract' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Passes/Controller_Abstract.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Passes\\Controller_Interface' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Passes/Controller_Interface.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Passes\\Modifier_Abstract' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Passes/Modifier_Abstract.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Passes\\Modifier_Interface' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Passes/Modifier_Interface.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Passes\\Pass_Abstract' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Passes/Pass_Abstract.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Passes\\Pass_Interface' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Passes/Pass_Interface.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Settings\\Checkbox_List_Setting_Abstract' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Settings/Checkbox_List_Setting_Abstract.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Settings\\Checkbox_Setting_Abstract' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Settings/Checkbox_Setting_Abstract.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Settings\\Color_Setting_Abstract' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Settings/Color_Setting_Abstract.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Settings\\Dropdown_Setting_Abstract' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Settings/Dropdown_Setting_Abstract.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Settings\\HTML_Setting_Abstract' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Settings/HTML_Setting_Abstract.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Settings\\Image_Setting_Abstract' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Settings/Image_Setting_Abstract.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Settings\\Setting_Interface' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Settings/Setting_Interface.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Settings\\Settings_Abstract' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Settings/Settings_Abstract.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Settings\\Settings_Interface' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Settings/Settings_Interface.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Settings\\Text_Setting_Abstract' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Settings/Text_Setting_Abstract.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Settings\\Toggle_Setting_Abstract' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Settings/Toggle_Setting_Abstract.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Settings\\Wysiwyg_Setting_Abstract' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Settings/Wysiwyg_Setting_Abstract.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\Traits\\Generic_Template' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/Traits/Generic_Template.php',
        'TEC\\Tickets_Wallet_Plus\\Contracts\\WhoDat_Client_Abstract' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Contracts/WhoDat_Client_Abstract.php',
        'TEC\\Tickets_Wallet_Plus\\Controller' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Controller.php',
        'TEC\\Tickets_Wallet_Plus\\Emails\\Controller' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Emails/Controller.php',
        'TEC\\Tickets_Wallet_Plus\\Emails\\Modifiers\\Include_Settings_To_RSVP_Email' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Emails/Modifiers/Include_Settings_To_RSVP_Email.php',
        'TEC\\Tickets_Wallet_Plus\\Emails\\Modifiers\\Include_Settings_To_Ticket_Email' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Emails/Modifiers/Include_Settings_To_Ticket_Email.php',
        'TEC\\Tickets_Wallet_Plus\\Emails\\Settings\\RSVP_Include_Passes_Setting' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Emails/Settings/RSVP_Include_Passes_Setting.php',
        'TEC\\Tickets_Wallet_Plus\\Emails\\Settings\\Ticket_Include_Passes_Setting' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Emails/Settings/Ticket_Include_Passes_Setting.php',
        'TEC\\Tickets_Wallet_Plus\\Modifiers\\Include_To_Attendee_Modal' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Modifiers/Include_To_Attendee_Modal.php',
        'TEC\\Tickets_Wallet_Plus\\Modifiers\\Include_To_My_Tickets' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Modifiers/Include_To_My_Tickets.php',
        'TEC\\Tickets_Wallet_Plus\\Modifiers\\Include_To_Order_Page' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Modifiers/Include_To_Order_Page.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Client' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Client.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Controller' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Controller.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Modifiers\\Attendee_Table_Row_Actions' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Modifiers/Attendee_Table_Row_Actions.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Modifiers\\Email_Link' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Modifiers/Email_Link.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Modifiers\\Handle_Pass_Redirect' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Modifiers/Handle_Pass_Redirect.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Modifiers\\Include_To_Attendee_Modal' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Modifiers/Include_To_Attendee_Modal.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Modifiers\\Include_To_Attendees_List' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Modifiers/Include_To_Attendees_List.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Modifiers\\Include_To_My_Tickets' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Modifiers/Include_To_My_Tickets.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Modifiers\\Include_To_Rsvp' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Modifiers/Include_To_Rsvp.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Modifiers\\Include_To_Tickets_Email' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Modifiers/Include_To_Tickets_Email.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Modifiers\\Sample' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Modifiers/Sample.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Package' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Package.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Pass' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Pass.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Sample' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Sample.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Settings' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Settings.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Settings\\Background_Color_Setting' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Settings/Background_Color_Setting.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Settings\\Enable_Passes_Setting' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Settings/Enable_Passes_Setting.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Settings\\Pass_Color_Setting' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Settings/Pass_Color_Setting.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Settings\\Pass_Logo_Image_Setting' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Settings/Pass_Logo_Image_Setting.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Settings\\Qr_Codes_Setting' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Settings/Qr_Codes_Setting.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Apple_Wallet\\Settings\\Text_Color_Setting' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Apple_Wallet/Settings/Text_Color_Setting.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Manager' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Manager.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Pdf\\Controller' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Pdf/Controller.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Pdf\\Modifiers\\Attach_To_Emails' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Pdf/Modifiers/Attach_To_Emails.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Pdf\\Modifiers\\Attendee_Table_Row_Actions' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Pdf/Modifiers/Attendee_Table_Row_Actions.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Pdf\\Modifiers\\Handle_Pass_Redirect' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Pdf/Modifiers/Handle_Pass_Redirect.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Pdf\\Modifiers\\Include_To_Attendee_Modal' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Pdf/Modifiers/Include_To_Attendee_Modal.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Pdf\\Modifiers\\Include_To_Attendees_List' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Pdf/Modifiers/Include_To_Attendees_List.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Pdf\\Modifiers\\Include_To_My_Tickets' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Pdf/Modifiers/Include_To_My_Tickets.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Pdf\\Modifiers\\Include_To_Rsvp' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Pdf/Modifiers/Include_To_Rsvp.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Pdf\\Pass' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Pdf/Pass.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Pdf\\Sample' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Pdf/Sample.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Pdf\\Settings' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Pdf/Settings.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Pdf\\Settings\\Additional_Content_Setting' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Pdf/Settings/Additional_Content_Setting.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Pdf\\Settings\\Enable_Pdf_Setting' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Pdf/Settings/Enable_Pdf_Setting.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Pdf\\Settings\\Header_Color_Setting' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Pdf/Settings/Header_Color_Setting.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Pdf\\Settings\\Header_Image_Setting' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Pdf/Settings/Header_Image_Setting.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Pdf\\Settings\\Image_Alignment_Setting' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Pdf/Settings/Image_Alignment_Setting.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Pdf\\Settings\\Include_Credit_Setting' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Pdf/Settings/Include_Credit_Setting.php',
        'TEC\\Tickets_Wallet_Plus\\Passes\\Pdf\\Settings\\Qr_Codes_Setting' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Passes/Pdf/Settings/Qr_Codes_Setting.php',
        'TEC\\Tickets_Wallet_Plus\\Plugin' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Plugin.php',
        'TEC\\Tickets_Wallet_Plus\\Plugin_Register' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Plugin_Register.php',
        'TEC\\Tickets_Wallet_Plus\\Template' => __DIR__ . '/../..' . '/src/Tickets_Wallet_Plus/Template.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d3b04e4a5b0fcb2b56e6e967bb39a35::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d3b04e4a5b0fcb2b56e6e967bb39a35::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9d3b04e4a5b0fcb2b56e6e967bb39a35::$classMap;

        }, null, ClassLoader::class);
    }
}
