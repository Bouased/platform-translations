<?php

return [
    'name' => 'Descuentos',
    'create' => 'Crear descuento',
    'edit' => 'Edit discount',
    'invalid_coupon' => '¡El cupón ya no es válido!',
    'cannot_use_same_time_with_other_discount_program' => '¡No se puede usar este cupón al mismo tiempo que otro programa de descuento!',
    'not_used' => '¡Este cupón aún no se ha utilizado!',
    'detail' => 'Detalle',
    'used' => '¿Usado?',
    'intro' => [
        'title' => 'Administrar código de descuento / cupón',
        'description' => 'Crea un código de descuento para los productos',
        'button_text' => 'Crear cupón',
    ],
    'expired' => 'Caducado',
    'discount_promotion' => 'Promoción de descuento',
    'can' => 'Puede',
    'cannot' => 'No pudo',
    'use_with_promotion' => 'Puede ser usado para pormoción',
    'create_discount_validate_title_required_if' => 'Ingrese el nombre de la promoción',
    'create_discount_validate_code_required_if' => 'Ingrese el código de promoción',
    'create_discount_validate_value_required' => 'La cantidad debe ser mayor que 0',
    'create_discount_validate_target_required' => 'No se seleccionó ningún elemento para aplicar la promoción',
    'enums' => [
        'type-options' => [
            'amount' => 'Monto - Fijo',
            'percentage' => 'Descuento %',
            'same-price' => 'Mismo precio',
            'shipping' => 'Envío gratis',
        ],
        'targets' => [
            'all-orders' => 'Todos los pedidos',
            'amount-minimum-order' => 'Cantidad mínima de pedido',
        ],
    ],
    'discount' => 'Descuento',
    'create_coupon_code' => 'Crear código',
    'create_discount_promotion' => 'Crear descuento',
    'generate_coupon_code' => 'Generar código',
    'customers_will_enter_this_coupon_code_when_they_checkout' => 'Los clientes ingresarán este código de cupón cuando realicen el pago',
    'select_type_of_discount' => 'Tipo de descuento',
    'coupon_code' => 'Código promocional',
    'promotion' => 'Promoción',
    'can_be_used_with_promotion' => 'Puede usarse con promoción',
    'unlimited_coupon' => 'Uso ilimitado',
    'enter_number' => 'Ingresa el número',
    'coupon_type' => 'Tipo de cupón',
    'percentage_discount' => 'Porcentaje de descuento %',
    'free_shipping' => 'Envío gratis',
    'same_price' => 'Mismo precio',
    'apply_for' => 'Aplicar a',
    'all_orders' => 'Todos los pedidos',
    'order_amount_from' => 'Importe del pedido de',
    'product_collection' => 'Colección de producto',
    'product_category' => 'Product category',
    'product' => 'Producto',
    'customer' => 'Cliente',
    'variant' => 'Variante',
    'search_product' => 'Buscar producto',
    'no_products_found' => 'No se encontraros productos',
    'search_customer' => 'Buscar cliente',
    'no_customer_found' => 'Cliente no encontrado',
    'one_time_per_order' => 'Una vez por pedido',
    'one_time_per_product_in_cart' => 'Una vez por producto en el carrito',
    'number_of_products' => 'Número de productos',
    'selected_products' => 'Productos seleccionados',
    'selected_customers' => 'Clientes seleccionados',
    'time' => 'Tiempo',
    'start_date' => 'Fecha de inicio',
    'end_date' => 'Fecha de finalización',
    'never_expired' => 'Nunca expira',
    'save' => 'Guardar',
    'enter_promotion_name' => 'Ingrese el nombre de la promoción',
    'enter_coupon_name' => 'Ingrese el nombre del cupón',
    'cancel' => 'Cancel',
    'is' => 'Is',
    'when_shipping_fee_less_than' => 'when shipping fee less than',
    'minimum_order_amount_error' => 'You are under :minimum_amount to apply the coupon, you must add :add_more more items to your cart',
    'once_per_customer' => 'Once per customer',
    'you_need_login_to_use_coupon_code' => 'You need to login to use this coupon code',
    'you_used_coupon_code' => 'You have already used this coupon code',
    'customer_used_coupon_code' => 'Customers who have used this discount code',
    'apply_via_url' => 'Apply via URL?',
    'apply_via_url_description' => 'This setting will apply coupon code when customers access the URL with the parameter "?coupon=code".',
    'display_at_checkout' => '¿Mostrar el código de cupón en la página de pago?',
    'display_at_checkout_description' => 'The list of coupon codes will be displayed at the checkout page and customers can choose to apply.',
    'description' => 'Description',
    'description_placeholder' => 'Short description about the discount program',
];
