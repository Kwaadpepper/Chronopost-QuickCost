# Chronopost QuickCost PHP Soap generated Lib

 LES SERVICES DE LA SERIE CALCULATE ET LE SERVICE QUICKCOSTV3 (QuickcostService)

Chronopost QuickCostV3 WSDL php generated lib using https://github.com/WsdlToPhp/PackageGenerator

```sh
composer require kwaadpepper/chronopost-quickcost
```

This package will only contain generated content from chronopost endpoint https://ws.chronopost.fr/quickcost-cxf/QuickcostServiceWS?wsdl

    wsdltophp generate:package --namespace ChronopostQuickCost \
        --urlorpath="https://ws.chronopost.fr/quickcost-cxf/QuickcostServiceWS?wsdl" \
        --destination="." \
        --composer-name="kwaadpepper/chronopost-quickcost" \
        --force
