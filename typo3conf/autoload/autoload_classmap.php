<?php

// autoload_classmap.php @generated by TYPO3

$typo3InstallDir = PATH_site;

return array(
    'GeorgRinger\\News\\Backend\\FieldInformation\\StaticText' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Backend/FieldInformation/StaticText.php',
    'GeorgRinger\\News\\Backend\\FormDataProvider\\NewsFlexFormManipulation' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Backend/FormDataProvider/NewsFlexFormManipulation.php',
    'GeorgRinger\\News\\Backend\\FormDataProvider\\NewsRowInitializeNew' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Backend/FormDataProvider/NewsRowInitializeNew.php',
    'GeorgRinger\\News\\Backend\\NewsSlugHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Backend/NewsSlugHelper.php',
    'GeorgRinger\\News\\Backend\\RecordList\\NewsDatabaseRecordList' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Backend/RecordList/NewsDatabaseRecordList.php',
    'GeorgRinger\\News\\Backend\\RecordList\\RecordListConstraint' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Backend/RecordList/RecordListConstraint.php',
    'GeorgRinger\\News\\Backend\\Wizard\\SuggestWizardReceiver' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Backend/Wizard/SuggestWizardReceiver.php',
    'GeorgRinger\\News\\Command\\NewsImportCommandController' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Command/NewsImportCommandController.php',
    'GeorgRinger\\News\\Controller\\AdministrationController' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Controller/AdministrationController.php',
    'GeorgRinger\\News\\Controller\\CategoryController' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Controller/CategoryController.php',
    'GeorgRinger\\News\\Controller\\ImportController' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Controller/ImportController.php',
    'GeorgRinger\\News\\Controller\\NewsBaseController' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Controller/NewsBaseController.php',
    'GeorgRinger\\News\\Controller\\NewsController' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Controller/NewsController.php',
    'GeorgRinger\\News\\Controller\\TagController' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Controller/TagController.php',
    'GeorgRinger\\News\\DataProcessing\\AddNewsToMenuProcessor' => $typo3InstallDir . 'typo3conf/ext/news/Classes/DataProcessing/AddNewsToMenuProcessor.php',
    'GeorgRinger\\News\\Domain\\Model\\Category' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Model/Category.php',
    'GeorgRinger\\News\\Domain\\Model\\DemandInterface' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Model/DemandInterface.php',
    'GeorgRinger\\News\\Domain\\Model\\Dto\\AdministrationDemand' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Model/Dto/AdministrationDemand.php',
    'GeorgRinger\\News\\Domain\\Model\\Dto\\EmConfiguration' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Model/Dto/EmConfiguration.php',
    'GeorgRinger\\News\\Domain\\Model\\Dto\\NewsDemand' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Model/Dto/NewsDemand.php',
    'GeorgRinger\\News\\Domain\\Model\\Dto\\Search' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Model/Dto/Search.php',
    'GeorgRinger\\News\\Domain\\Model\\FileReference' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Model/FileReference.php',
    'GeorgRinger\\News\\Domain\\Model\\Link' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Model/Link.php',
    'GeorgRinger\\News\\Domain\\Model\\News' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Model/News.php',
    'GeorgRinger\\News\\Domain\\Model\\NewsDefault' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Model/NewsDefault.php',
    'GeorgRinger\\News\\Domain\\Model\\NewsExternal' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Model/NewsExternal.php',
    'GeorgRinger\\News\\Domain\\Model\\NewsInternal' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Model/NewsInternal.php',
    'GeorgRinger\\News\\Domain\\Model\\Tag' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Model/Tag.php',
    'GeorgRinger\\News\\Domain\\Model\\TtContent' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Model/TtContent.php',
    'GeorgRinger\\News\\Domain\\Repository\\AbstractDemandedRepository' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Repository/AbstractDemandedRepository.php',
    'GeorgRinger\\News\\Domain\\Repository\\AdministrationRepository' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Repository/AdministrationRepository.php',
    'GeorgRinger\\News\\Domain\\Repository\\CategoryRepository' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Repository/CategoryRepository.php',
    'GeorgRinger\\News\\Domain\\Repository\\DemandedRepositoryInterface' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Repository/DemandedRepositoryInterface.php',
    'GeorgRinger\\News\\Domain\\Repository\\FileRepository' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Repository/FileRepository.php',
    'GeorgRinger\\News\\Domain\\Repository\\LinkRepository' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Repository/LinkRepository.php',
    'GeorgRinger\\News\\Domain\\Repository\\MediaRepository' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Repository/MediaRepository.php',
    'GeorgRinger\\News\\Domain\\Repository\\NewsDefaultRepository' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Repository/NewsDefaultRepository.php',
    'GeorgRinger\\News\\Domain\\Repository\\NewsRepository' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Repository/NewsRepository.php',
    'GeorgRinger\\News\\Domain\\Repository\\TagRepository' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Repository/TagRepository.php',
    'GeorgRinger\\News\\Domain\\Repository\\TtContentRepository' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Repository/TtContentRepository.php',
    'GeorgRinger\\News\\Domain\\Service\\AbstractImportService' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Service/AbstractImportService.php',
    'GeorgRinger\\News\\Domain\\Service\\CategoryImportService' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Service/CategoryImportService.php',
    'GeorgRinger\\News\\Domain\\Service\\NewsImportService' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Domain/Service/NewsImportService.php',
    'GeorgRinger\\News\\Hooks\\BackendUtility' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Hooks/BackendUtility.php',
    'GeorgRinger\\News\\Hooks\\Backend\\PageViewQueryHook' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Hooks/Backend/PageViewQueryHook.php',
    'GeorgRinger\\News\\Hooks\\Backend\\RecordListQueryHook' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Hooks/Backend/RecordListQueryHook.php',
    'GeorgRinger\\News\\Hooks\\DataHandler' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Hooks/DataHandler.php',
    'GeorgRinger\\News\\Hooks\\InlineElementHook' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Hooks/InlineElementHook.php',
    'GeorgRinger\\News\\Hooks\\ItemsProcFunc' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Hooks/ItemsProcFunc.php',
    'GeorgRinger\\News\\Hooks\\Labels' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Hooks/Labels.php',
    'GeorgRinger\\News\\Hooks\\PageLayoutView' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Hooks/PageLayoutView.php',
    'GeorgRinger\\News\\Hooks\\RealUrlAutoConfiguration' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Hooks/RealUrlAutoConfiguration.php',
    'GeorgRinger\\News\\Hooks\\TxNewsSitemapGenerator' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Hooks/TxNewsSitemapGenerator.php',
    'GeorgRinger\\News\\Jobs\\AbstractImportJob' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Jobs/AbstractImportJob.php',
    'GeorgRinger\\News\\Jobs\\ImportJobInterface' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Jobs/ImportJobInterface.php',
    'GeorgRinger\\News\\Seo\\NewsXmlSitemapDataProvider' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Seo/NewsXmlSitemapDataProvider.php',
    'GeorgRinger\\News\\Service\\AccessControlService' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Service/AccessControlService.php',
    'GeorgRinger\\News\\Service\\CategoryService' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Service/CategoryService.php',
    'GeorgRinger\\News\\Service\\Import\\DataProviderServiceInterface' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Service/Import/DataProviderServiceInterface.php',
    'GeorgRinger\\News\\Service\\SettingsService' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Service/SettingsService.php',
    'GeorgRinger\\News\\Service\\SlugService' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Service/SlugService.php',
    'GeorgRinger\\News\\TreeProvider\\DatabaseTreeDataProvider' => $typo3InstallDir . 'typo3conf/ext/news/Classes/TreeProvider/DatabaseTreeDataProvider.php',
    'GeorgRinger\\News\\Updates\\NewsSlugUpdater' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Updates/NewsSlugUpdater.php',
    'GeorgRinger\\News\\Updates\\PopulateCategorySlugs' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Updates/PopulateCategorySlugs.php',
    'GeorgRinger\\News\\Updates\\PopulateTagSlugs' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Updates/PopulateTagSlugs.php',
    'GeorgRinger\\News\\Updates\\RealurlAliasNewsSlugUpdater' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Updates/RealurlAliasNewsSlugUpdater.php',
    'GeorgRinger\\News\\Utility\\Cache' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Utility/Cache.php',
    'GeorgRinger\\News\\Utility\\ClassCacheManager' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Utility/ClassCacheManager.php',
    'GeorgRinger\\News\\Utility\\ClassLoader' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Utility/ClassLoader.php',
    'GeorgRinger\\News\\Utility\\ClassParser' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Utility/ClassParser.php',
    'GeorgRinger\\News\\Utility\\ConstraintHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Utility/ConstraintHelper.php',
    'GeorgRinger\\News\\Utility\\EmConfiguration' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Utility/EmConfiguration.php',
    'GeorgRinger\\News\\Utility\\ImportJob' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Utility/ImportJob.php',
    'GeorgRinger\\News\\Utility\\Page' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Utility/Page.php',
    'GeorgRinger\\News\\Utility\\TemplateLayout' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Utility/TemplateLayout.php',
    'GeorgRinger\\News\\Utility\\TypoScript' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Utility/TypoScript.php',
    'GeorgRinger\\News\\Utility\\Url' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Utility/Url.php',
    'GeorgRinger\\News\\Utility\\Validation' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Utility/Validation.php',
    'GeorgRinger\\News\\ViewHelpers\\Be\\IsCheckboxActiveViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/Be/IsCheckboxActiveViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\ExcludeDisplayedNewsViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/ExcludeDisplayedNewsViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\ExtensionLoadedViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/ExtensionLoadedViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\Format\\NothingViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/Format/NothingViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\HeaderDataViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/HeaderDataViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\IfIsActiveViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/IfIsActiveViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\ImageSizeViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/ImageSizeViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\IncludeFileViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/IncludeFileViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\LinkViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/LinkViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\MetaTagViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/MetaTagViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\MultiCategoryLink\\ArgumentsViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/MultiCategoryLink/ArgumentsViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\MultiCategoryLink\\IsCategoryActiveViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/MultiCategoryLink/IsCategoryActiveViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\PaginateBodytextViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/PaginateBodytextViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\RemoveMediaTagsViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/RemoveMediaTagsViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\RenderMediaViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/RenderMediaViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\SimplePrevNextViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/SimplePrevNextViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\Social\\DisqusViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/Social/DisqusViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\Social\\Facebook\\CommentViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/Social/Facebook/CommentViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\Social\\Facebook\\LikeViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/Social/Facebook/LikeViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\Social\\Facebook\\ShareViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/Social/Facebook/ShareViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\Social\\GooglePlusViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/Social/GooglePlusViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\Social\\GravatarViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/Social/GravatarViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\Social\\TwitterViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/Social/TwitterViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\Tag\\CountViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/Tag/CountViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\TargetLinkViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/TargetLinkViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\TitleTagViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/TitleTagViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\Widget\\Ajax\\PaginateAdditionalParamsViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/Widget/Ajax/PaginateAdditionalParamsViewHelper.php',
    'GeorgRinger\\News\\ViewHelpers\\Widget\\Controller\\PaginateController' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/Widget/Controller/PaginateController.php',
    'GeorgRinger\\News\\ViewHelpers\\Widget\\PaginateViewHelper' => $typo3InstallDir . 'typo3conf/ext/news/Classes/ViewHelpers/Widget/PaginateViewHelper.php',
    'GeorgRinger\\News\\Xclass\\InlineRecordContainerForNews' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Xclass/InlineRecordContainerForNews.php',
    'GeorgRinger\\News\\Xclass\\XclassedXliffParser' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Xclass/XclassedXliffParser.php',
    'GeorgRinger\\News\\Xclass\\XclassedXliffParser8' => $typo3InstallDir . 'typo3conf/ext/news/Classes/Xclass/XclassedXliffParser8.php',
    'RG\\TtNews\\Catmenu' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Catmenu.php',
    'RG\\TtNews\\ClickMenu' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/ClickMenu.php',
    'RG\\TtNews\\Controller\\NewsBackendAjaxController' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Controller/NewsBackendAjaxController.php',
    'RG\\TtNews\\Controller\\NewsFrontendAjaxController' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Controller/NewsFrontendAjaxController.php',
    'RG\\TtNews\\Database\\Database' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Database/Database.php',
    'RG\\TtNews\\Form\\FormDataProvider' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Form/FormDataProvider.php',
    'RG\\TtNews\\Helper\\Helpers' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Helper/Helpers.php',
    'RG\\TtNews\\Helper\\ItemsProcFunc' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Helper/ItemsProcFunc.php',
    'RG\\TtNews\\Hooks\\DataHandlerHook' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Hooks/DataHandlerHook.php',
    'RG\\TtNews\\Hooks\\PageModuleHook' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Hooks/PageModuleHook.php',
    'RG\\TtNews\\Hooks\\RealUrlHook' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Hooks/RealUrlHook.php',
    'RG\\TtNews\\Module\\CategoryManager' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Module/CategoryManager.php',
    'RG\\TtNews\\Module\\NewsAdminModule' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Module/NewsAdminModule.php',
    'RG\\TtNews\\Module\\NewsRecordlist' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Module/NewsRecordlist.php',
    'RG\\TtNews\\Plugin\\TtNews' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Plugin/TtNews.php',
    'RG\\TtNews\\Tree\\Categorytree' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Tree/Categorytree.php',
    'RG\\TtNews\\Tree\\FeTreeView' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Tree/FeTreeView.php',
    'RG\\TtNews\\Tree\\TableConfiguration\\NewsDatabaseTreeDataProvider' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Tree/TableConfiguration/NewsDatabaseTreeDataProvider.php',
    'RG\\TtNews\\Utility\\Div' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Utility/Div.php',
    'RG\\TtNews\\Utility\\IconFactory' => $typo3InstallDir . 'typo3conf/ext/tt_news/Classes/Utility/IconFactory.php',
    'WapplerSystems\\WsFlexslider\\Controller\\FlexsliderController' => $typo3InstallDir . 'typo3conf/ext/ws_flexslider/Classes/Controller/FlexsliderController.php',
    'WapplerSystems\\WsFlexslider\\Domain\\Model\\Content' => $typo3InstallDir . 'typo3conf/ext/ws_flexslider/Classes/Domain/Model/Content.php',
    'WapplerSystems\\WsFlexslider\\Domain\\Model\\Image' => $typo3InstallDir . 'typo3conf/ext/ws_flexslider/Classes/Domain/Model/Image.php',
    'WapplerSystems\\WsFlexslider\\Domain\\Repository\\ContentRepository' => $typo3InstallDir . 'typo3conf/ext/ws_flexslider/Classes/Domain/Repository/ContentRepository.php',
    'WapplerSystems\\WsFlexslider\\Domain\\Repository\\ImageRepository' => $typo3InstallDir . 'typo3conf/ext/ws_flexslider/Classes/Domain/Repository/ImageRepository.php',
    'WapplerSystems\\WsFlexslider\\Hooks\\ItemsProcFunc' => $typo3InstallDir . 'typo3conf/ext/ws_flexslider/Classes/Hooks/ItemsProcFunc.php',
    'WapplerSystems\\WsFlexslider\\Utility\\Div' => $typo3InstallDir . 'typo3conf/ext/ws_flexslider/Classes/Utility/Div.php',
    'WapplerSystems\\WsFlexslider\\Utility\\TemplateLayout' => $typo3InstallDir . 'typo3conf/ext/ws_flexslider/Classes/Utility/TemplateLayout.php',
    'WapplerSystems\\WsFlexslider\\ViewHelpers\\PageRenderer\\AddJsFooterInlineCodeViewHelper' => $typo3InstallDir . 'typo3conf/ext/ws_flexslider/Classes/ViewHelpers/PageRenderer/AddJsFooterInlineCodeViewHelper.php',
);
