<?php

class Tab extends TabCore {};
class PaymentOptionsFinder extends PaymentOptionsFinderCore {};
class ConditionsToApproveFinder extends ConditionsToApproveFinderCore {};
class CheckoutAddressesStep extends CheckoutAddressesStepCore {};
class CartChecksum extends CartChecksumCore {};
class CheckoutDeliveryStep extends CheckoutDeliveryStepCore {};
class CheckoutSession extends CheckoutSessionCore {};
class CheckoutProcess extends CheckoutProcessCore {};
class CheckoutPaymentStep extends CheckoutPaymentStepCore {};
class CheckoutPersonalInformationStep extends CheckoutPersonalInformationStepCore {};
class DeliveryOptionsFinder extends DeliveryOptionsFinderCore {};
abstract class AbstractCheckoutStep extends AbstractCheckoutStepCore {};
class AddressValidator extends AddressValidatorCore {};
class WebserviceOutputJSON extends WebserviceOutputJSONCore {};
class WebserviceSpecificManagementAttachments extends WebserviceSpecificManagementAttachmentsCore {};
class WebserviceOutputBuilder extends WebserviceOutputBuilderCore {};
class WebserviceRequest extends WebserviceRequestCore {};
class WebserviceSpecificManagementImages extends WebserviceSpecificManagementImagesCore {};
class WebserviceException extends WebserviceExceptionCore {};
class WebserviceOutputXML extends WebserviceOutputXMLCore {};
class WebserviceKey extends WebserviceKeyCore {};
class WebserviceSpecificManagementSearch extends WebserviceSpecificManagementSearchCore {};
abstract class PaymentModule extends PaymentModuleCore {};
class QuickAccess extends QuickAccessCore {};
class Supplier extends SupplierCore {};
class DateRange extends DateRangeCore {};
class ShopUrl extends ShopUrlCore {};
class Shop extends ShopCore {};
class ShopGroup extends ShopGroupCore {};
class Group extends GroupCore {};
class SpecificPriceRule extends SpecificPriceRuleCore {};
class Meta extends MetaCore {};
class Translate extends TranslateCore {};
class Customization extends CustomizationCore {};
class PhpEncryption extends PhpEncryptionCore {};
class Product extends ProductCore {};
class Attribute extends AttributeCore {};
class ProductDownload extends ProductDownloadCore {};
class Hook extends HookCore {};
class CustomerAddressForm extends CustomerAddressFormCore {};
class CustomerAddressPersister extends CustomerAddressPersisterCore {};
class CustomerPersister extends CustomerPersisterCore {};
class CustomerAddressFormatter extends CustomerAddressFormatterCore {};
class FormField extends FormFieldCore {};
class CustomerForm extends CustomerFormCore {};
class CustomerLoginFormatter extends CustomerLoginFormatterCore {};
class CustomerLoginForm extends CustomerLoginFormCore {};
abstract class AbstractForm extends AbstractFormCore {};
class CustomerFormatter extends CustomerFormatterCore {};
class PrestaShopLogger extends PrestaShopLoggerCore {};
class ConfigurationTest extends ConfigurationTestCore {};
class Carrier extends CarrierCore {};
class Mail extends MailCore {};
class Access extends AccessCore {};
class ProductSale extends ProductSaleCore {};
class Dispatcher extends DispatcherCore {};
class Combination extends CombinationCore {};
class Tag extends TagCore {};
abstract class Db extends DbCore {};
class DbQuery extends DbQueryCore {};
class DbPDO extends DbPDOCore {};
class DbMySQLi extends DbMySQLiCore {};
class RangeWeight extends RangeWeightCore {};
class RangePrice extends RangePriceCore {};
class Pack extends PackCore {};
class Image extends ImageCore {};
class Search extends SearchCore {};
class PhpEncryptionLegacyEngine extends PhpEncryptionLegacyEngineCore {};
class PhpEncryptionEngine extends PhpEncryptionEngineCore {};
class Windows extends WindowsCore {};
class CmsCategoryLang extends CmsCategoryLangCore {};
class ConfigurationLang extends ConfigurationLangCore {};
class QuickAccessLang extends QuickAccessLangCore {};
class AttributeLang extends AttributeLangCore {};
class FeatureLang extends FeatureLangCore {};
class FeatureValueLang extends FeatureValueLangCore {};
class GroupLang extends GroupLangCore {};
class DataLang extends DataLangCore {};
class SupplyOrderStateLang extends SupplyOrderStateLangCore {};
class CategoryLang extends CategoryLangCore {};
class ContactLang extends ContactLangCore {};
class StockMvtReasonLang extends StockMvtReasonLangCore {};
class ThemeLang extends ThemeLangCore {};
class OrderStateLang extends OrderStateLangCore {};
class AttributeGroupLang extends AttributeGroupLangCore {};
class OrderMessageLang extends OrderMessageLangCore {};
class TabLang extends TabLangCore {};
class MetaLang extends MetaLangCore {};
class OrderReturnStateLang extends OrderReturnStateLangCore {};
class CarrierLang extends CarrierLangCore {};
class ProfileLang extends ProfileLangCore {};
class RiskLang extends RiskLangCore {};
class GenderLang extends GenderLangCore {};
class SmartyResourceParent extends SmartyResourceParentCore {};
class SmartyDevTemplate extends SmartyDevTemplateCore {};
class SmartyResourceModule extends SmartyResourceModuleCore {};
class TemplateFinder extends TemplateFinderCore {};
class SmartyCustomTemplate extends SmartyCustomTemplateCore {};
class SmartyCustom extends SmartyCustomCore {};
class Customer extends CustomerCore {};
abstract class AbstractLogger extends AbstractLoggerCore {};
class FileLogger extends FileLoggerCore {};
class JavascriptManager extends JavascriptManagerCore {};
class CccReducer extends CccReducerCore {};
class StylesheetManager extends StylesheetManagerCore {};
class CssMinifier extends CssMinifierCore {};
abstract class AbstractAssetManager extends AbstractAssetManagerCore {};
class JsMinifier extends JsMinifierCore {};
class CMSRole extends CMSRoleCore {};
class RequestSql extends RequestSqlCore {};
class AddressFormat extends AddressFormatCore {};
class SupplierAddress extends SupplierAddressCore {};
class ManufacturerAddress extends ManufacturerAddressCore {};
class Alias extends AliasCore {};
class GroupReduction extends GroupReductionCore {};
class Address extends AddressCore {};
class TreeToolbarLink extends TreeToolbarLinkCore {};
abstract class TreeToolbarButton extends TreeToolbarButtonCore {};
class TreeToolbarSearch extends TreeToolbarSearchCore {};
class TreeToolbarSearchCategories extends TreeToolbarSearchCategoriesCore {};
class TreeToolbar extends TreeToolbarCore {};
class Tree extends TreeCore {};
class ProductAssembler extends ProductAssemblerCore {};
class Feature extends FeatureCore {};
class Context extends ContextCore {};
class Media extends MediaCore {};
class Employee extends EmployeeCore {};
class PrestaShopModuleException extends PrestaShopModuleExceptionCore {};
class PrestaShopDatabaseException extends PrestaShopDatabaseExceptionCore {};
class PrestaShopException extends PrestaShopExceptionCore {};
class PrestaShopObjectNotFoundException extends PrestaShopObjectNotFoundExceptionCore {};
class PrestaShopPaymentException extends PrestaShopPaymentExceptionCore {};
class ImageManager extends ImageManagerCore {};
class FeatureValue extends FeatureValueCore {};
class CustomerSession extends CustomerSessionCore {};
class Notification extends NotificationCore {};
class CustomizationField extends CustomizationFieldCore {};
class QqUploadedFileForm extends QqUploadedFileFormCore {};
class State extends StateCore {};
class PrestaShopBackup extends PrestaShopBackupCore {};
class HTMLTemplateDeliverySlip extends HTMLTemplateDeliverySlipCore {};
class PDFGenerator extends PDFGeneratorCore {};
class HTMLTemplateInvoice extends HTMLTemplateInvoiceCore {};
class PDF extends PDFCore {};
class HTMLTemplateSupplyOrderForm extends HTMLTemplateSupplyOrderFormCore {};
class HTMLTemplateOrderReturn extends HTMLTemplateOrderReturnCore {};
abstract class HTMLTemplate extends HTMLTemplateCore {};
class HTMLTemplateOrderSlip extends HTMLTemplateOrderSlipCore {};
class TranslatedConfiguration extends TranslatedConfigurationCore {};
class TaxRulesGroup extends TaxRulesGroupCore {};
class TaxRule extends TaxRuleCore {};
class TaxCalculator extends TaxCalculatorCore {};
class TaxConfiguration extends TaxConfigurationCore {};
class Tax extends TaxCore {};
abstract class TaxManagerModule extends TaxManagerModuleCore {};
class TaxManagerFactory extends TaxManagerFactoryCore {};
class TaxRulesTaxManager extends TaxRulesTaxManagerCore {};
class LocalizationPack extends LocalizationPackCore {};
class Gender extends GenderCore {};
class Connection extends ConnectionCore {};
class CSV extends CSVCore {};
class FileUploader extends FileUploaderCore {};
class Referrer extends ReferrerCore {};
class PrestaShopCollection extends PrestaShopCollectionCore {};
class Uploader extends UploaderCore {};
class Risk extends RiskCore {};
class Page extends PageCore {};
class AttributeGroup extends AttributeGroupCore {};
class SpecificPriceFormatter extends SpecificPriceFormatterCore {};
class Upgrader extends UpgraderCore {};
class CMSCategory extends CMSCategoryCore {};
abstract class ProductListingFrontController extends ProductListingFrontControllerCore {};
abstract class ProductPresentingFrontController extends ProductPresentingFrontControllerCore {};
class ModuleFrontController extends ModuleFrontControllerCore {};
abstract class ModuleAdminController extends ModuleAdminControllerCore {};
class FrontController extends FrontControllerCore {};
abstract class Controller extends ControllerCore {};
class AdminController extends AdminControllerCore {};
class CacheMemcached extends CacheMemcachedCore {};
class CacheXcache extends CacheXcacheCore {};
class CacheApc extends CacheApcCore {};
abstract class Cache extends CacheCore {};
class CacheMemcache extends CacheMemcacheCore {};
class CustomerThread extends CustomerThreadCore {};
class Link extends LinkCore {};
abstract class CarrierModule extends CarrierModuleCore {};
abstract class ModuleGrid extends ModuleGridCore {};
abstract class ModuleGraph extends ModuleGraphCore {};
abstract class ModuleGridEngine extends ModuleGridEngineCore {};
abstract class ModuleGraphEngine extends ModuleGraphEngineCore {};
abstract class Module extends ModuleCore {};
class Category extends CategoryCore {};
class Tools extends ToolsCore {};
class Store extends StoreCore {};
class Attachment extends AttachmentCore {};
class Cookie extends CookieCore {};
class Country extends CountryCore {};
class SearchEngine extends SearchEngineCore {};
class Curve extends CurveCore {};
class ProductPresenterFactory extends ProductPresenterFactoryCore {};
class Cart extends CartCore {};
class QqUploadedFileXhr extends QqUploadedFileXhrCore {};
class Configuration extends ConfigurationCore {};
class Profile extends ProfileCore {};
class CustomerMessage extends CustomerMessageCore {};
class Currency extends CurrencyCore {};
class Chart extends ChartCore {};
class CartRule extends CartRuleCore {};
class WarehouseAddress extends WarehouseAddressCore {};
class ConnectionsSource extends ConnectionsSourceCore {};
class Validate extends ValidateCore {};
class Manufacturer extends ManufacturerCore {};
class Message extends MessageCore {};
class ImageType extends ImageTypeCore {};
class EmployeeSession extends EmployeeSessionCore {};
class Contact extends ContactCore {};
class AddressChecksum extends AddressChecksumCore {};
class ValidateConstraintTranslator extends ValidateConstraintTranslatorCore {};
class Zone extends ZoneCore {};
class CustomerAddress extends CustomerAddressCore {};
class Language extends LanguageCore {};
class Guest extends GuestCore {};
class LinkProxy extends LinkProxyCore {};
class ProductSupplier extends ProductSupplierCore {};
class OrderPayment extends OrderPaymentCore {};
class OrderSlip extends OrderSlipCore {};
class OrderDiscount extends OrderDiscountCore {};
class OrderMessage extends OrderMessageCore {};
class OrderHistory extends OrderHistoryCore {};
class OrderReturn extends OrderReturnCore {};
class OrderDetail extends OrderDetailCore {};
class Order extends OrderCore {};
class OrderState extends OrderStateCore {};
class OrderInvoice extends OrderInvoiceCore {};
class OrderReturnState extends OrderReturnStateCore {};
class OrderCarrier extends OrderCarrierCore {};
class OrderCartRule extends OrderCartRuleCore {};
class ConfigurationKPI extends ConfigurationKPICore {};
class Helper extends HelperCore {};
class HelperCalendar extends HelperCalendarCore {};
class HelperForm extends HelperFormCore {};
class HelperView extends HelperViewCore {};
class HelperImageUploader extends HelperImageUploaderCore {};
class HelperKpi extends HelperKpiCore {};
class HelperKpiRow extends HelperKpiRowCore {};
class HelperUploader extends HelperUploaderCore {};
class HelperOptions extends HelperOptionsCore {};
class HelperShop extends HelperShopCore {};
class HelperTreeShops extends HelperTreeShopsCore {};
class HelperTreeCategories extends HelperTreeCategoriesCore {};
class HelperList extends HelperListCore {};
class CMS extends CMSCore {};
class SupplyOrder extends SupplyOrderCore {};
class StockMvtReason extends StockMvtReasonCore {};
class SupplyOrderReceiptHistory extends SupplyOrderReceiptHistoryCore {};
class StockMvtWS extends StockMvtWSCore {};
class StockManagerFactory extends StockManagerFactoryCore {};
class SupplyOrderHistory extends SupplyOrderHistoryCore {};
abstract class StockManagerModule extends StockManagerModuleCore {};
class StockManager extends StockManagerCore {};
class StockAvailable extends StockAvailableCore {};
class StockMvt extends StockMvtCore {};
class Warehouse extends WarehouseCore {};
class Stock extends StockCore {};
class WarehouseProductLocation extends WarehouseProductLocationCore {};
class SupplyOrderDetail extends SupplyOrderDetailCore {};
class SupplyOrderState extends SupplyOrderStateCore {};
class SpecificPrice extends SpecificPriceCore {};
class Delivery extends DeliveryCore {};
abstract class ObjectModel extends ObjectModelCore {};
