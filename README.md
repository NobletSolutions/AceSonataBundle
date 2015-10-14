AceSonataBundle
===============

Install using composer.json
--------------------------

If you are using composer to manage your project, just add the following
line to your composer.json file

    {
        "require": {
            "ns/ace-sonata-bundle": "dev-master"
        }
    }

Then update the vendor libraries:

```shell
composer.phar update
# OR
composer.phar update ns/ace-sonata-bundle # to only update the bundle
```

Register the bundle
--------------------

You must register the bundle in your kernel:

    <?php

    // app/AppKernel.php
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new NS\AceSonataBundle\NSAceSonataBundle(),
        );
        // ...
    }


Configure
---------

Configure sonata to use the ace bundle themed layouts.

    #app/config/config.yml
    sonata_admin:
      templates:
        layout: NSAceSonataBundle::layout.html.twig
        pager_links: NSAceSonataBundle::pager.html.twig
        edit: NSAceSonataBundle:CRUD:edit.html.twig
