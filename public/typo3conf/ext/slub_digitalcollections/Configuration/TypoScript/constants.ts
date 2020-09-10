###################################################
# All used Constants for SLUB Digital Collections
###################################################
config {
    kitodo {

        # basic solr config
        solr {
            # cat=plugin.tx_slubdigitalcollections/links/0200; type=int+; label= solr core uid
            core = 1

            # cat=plugin.tx_slubdigitalcollections/links/0201; type=int+; label= solr search query limit
            searchLimit = 1000

            # cat=plugin.tx_slubdigitalcollections/links/0202; type=string; label= solr url including scheme, port and path
            host = http://sdvsolr2.slub-dresden.de:8983/solr

            # cat=plugin.tx_slubdigitalcollections/links/0203; type=string; label= solr core name
            coreName = dlfCore0

            # cat=plugin.tx_slubdigitalcollections/links/0204; type=int+; label= solr connection timeout (s)
            timeout = 5
        }

        # basic id config
        rootPage {
            # cat=plugin.tx_slubdigitalcollections/links/0300; type=int+; label= Kitodo Rootpage
            pid  = 5346

            # cat=plugin.tx_slubdigitalcollections/links/0301; type=string; label= Kitodo Title
            title = Digitale Sammlungen

            # cat=plugin.tx_slubdigitalcollections/links/0302; type=string; label= Kitodo CSS-class
            cssClass = dlf-slub-logo
        }

        # cat=plugin.tx_slubdigitalcollections/links/0320; type=int+; label= Dlf Storage Pid
        storagePid = 4152

        # cat=plugin.tx_slubdigitalcollections/links/0321; type=int+; label= Kitodo Terms of Use Page
        termsOfUsePid = 5345

        # cat=plugin.tx_slubdigitalcollections/links/0322; type=list; label= Pids for Navigation
        viewerNavigationPids = 4010, 5346, 9259, 4012, 10105

        # cat=plugin.tx_slubdigitalcollections/links/0323; type=int+; label= Kitodo Pageview
        pageView = 5363

        # cat=plugin.tx_slubdigitalcollections/links/0324; type=int+; label= pagegrid limit (thumbnail preview)
        pagegrid.limit = 35

        # cat=plugin.tx_slubdigitalcollections/links/0325; type=int+; label= Kitodo Collection Page
        collectionView = 5362

        # cat=plugin.tx_slubdigitalcollections/links/0326; type=int+; label= Kitodo List Page
        listView = 5364

        css {
            # cat=plugin.tx_slubdigitalcollections/advanced/0500; type=string; label=CSS file for all lists (eg. collections)
            lists = EXT:slub_digitalcollections/Resources/Public/Css/DigitalcollectionsLists.css

            # cat=plugin.tx_slubdigitalcollections/advanced/0501; type=string; label=CSS file for kitodo pageview
            page = EXT:slub_digitalcollections/Resources/Public/Css/Digitalcollections.css
        }

        templates {

            # cat=plugin.tx_slubdigitalcollections/advanced/0400; type=string; label=Collections Template
            collections = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/Collections.html

            # cat=plugin.tx_slubdigitalcollections/advanced/0401; type=string; label=Listview Template
            listView = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/Listview.html

            # cat=plugin.tx_slubdigitalcollections/advanced/0402; type=string; label=Gridview Template
            gridView = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/Gridview.html

            # cat=plugin.tx_slubdigitalcollections/advanced/0403; type=string; label=Pageview Template
            pageView = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/Pageview.html

            # cat=plugin.tx_slubdigitalcollections/advanced/0404; type=string; label=Search Template
            search = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/Search.html

            # cat=plugin.tx_slubdigitalcollections/advanced/0405; type=string; label=SearchFullText Template
            searchFullText = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/SearchFullText.html

            # cat=plugin.tx_slubdigitalcollections/advanced/0406; type=string; label=SearchInDocumentTool Template
            searchInDocumentTool = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/SearchInDocumentTool.html

            # cat=plugin.tx_slubdigitalcollections/advanced/0407; type=string; label=Metadata Template
            metadata = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/Metadata.html

            # cat=plugin.tx_slubdigitalcollections/advanced/0408; type=string; label=Titledata Template
            titledata = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/Titledata.html

            # cat=plugin.tx_slubdigitalcollections/advanced/0409; type=string; label=TableOfContents Template
            tableOfContents = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/TableOfContents.html

            # cat=plugin.tx_slubdigitalcollections/advanced/0410; type=string; label=NavigationPagecontrol Template
            navigationPagecontrol = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/NavigationPagecontrol.html

            # cat=plugin.tx_slubdigitalcollections/advanced/0411; type=string; label=NavigationViewfunction Template
            navigationViewfunction = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/NavigationViewfunction.html

            # cat=plugin.tx_slubdigitalcollections/advanced/0412; type=string; label=NavigationViewfunction deactivated Template
            navigationViewfunction-deactivated = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/NavigationViewfunction-deactivated.html

            # cat=plugin.tx_slubdigitalcollections/advanced/0413; type=string; label=Toolbox Template
            toolbox = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/Toolbox.html

            # cat=plugin.tx_slubdigitalcollections/advanced/0414; type=string; label=ToolsPdf Template
            toolsPdf = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/ToolsPdf.html

            # cat=plugin.tx_slubdigitalcollections/advanced/0415; type=string; label=ToolFullText Template
            toolFullText = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/ToolFullText.html

            # cat=plugin.tx_slubdigitalcollections/advanced/0416; type=string; label=ToolsImagemanipulation Template
            toolsImageManipulation = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/ToolsImagemanipulation.html

            # cat=plugin.tx_slubdigitalcollections/advanced/0417; type=string; label=NewspaperYear Template
            newspaperYear = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/NewspaperYear.html

            # cat=plugin.tx_slubdigitalcollections/advanced/0418; type=string; label=NewspaperCalendar Template
            newspaperCalendar = EXT:slub_digitalcollections/Resources/Private/Plugins/Kitodo/NewspaperCalendar.html
        }

    }

    # matomo configuration (maybe overwritten)
    # cat=plugin.tx_slubdigitalcollections/piwik/0310; type=string; label=Matomo Hostname
    piwik_hostname = piwik.slub-dresden.de
    # cat=plugin.tx_slubdigitalcollections/piwik/0320; type=int+; label=Matomo Idsite
    piwik_idsite =
    # cat=plugin.tx_slubdigitalcollections/piwik/0330; type=string; label=Matomo Domains (optional)
    piwik_domains = *.slub-dresden.de

    # template path config
    templateRootPath = EXT:slub_digitalcollections/Resources/Private/Templates/
    partialRootPath = EXT:slub_digitalcollections/Resources/Private/Partials/
    layoutRootPath = EXT:slub_digitalcollections/Resources/Private/Layouts/
}