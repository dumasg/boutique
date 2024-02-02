```mermaid
erDiagram
    customer ||--o{ customers_rights: places
    customer ||--o{ orders: places
    customer {
        int id
        string email
        string pwd
        string name
        string fristName
    }
   
    products ||--o{ products_orders: places
    products {
        int id
        string name
        string description
        int stock
        string path_img
        float price_ht
        float price_ttc
        float price_tva
        float weight
        int categories_id
        int tva_id
    }

    tva ||--o{ products: places
    tva {
        int id
        float rate_tva
    }
    categories ||--o{ products: places
    categories {
        int id
        string name
    }
    orders ||--o{ products_orders: places
    orders {
        int id
        string number
        date date_order
        date date_delivery
        int customers_id
    }
    rights ||--o{ customers_rights: places
    rights{
        int id
        string right
    }
    products_orders {
        int orders_id
        int products_id
        int quantity
    }
    
    customers_rights{
        int customers_id
        int rights_id
    }
```