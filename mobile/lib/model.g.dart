// GENERATED CODE - DO NOT MODIFY BY HAND

part of 'model.dart';

// **************************************************************************
// JsonSerializableGenerator
// **************************************************************************

User _$UserFromJson(Map<String, dynamic> json) => User()
  ..id = json['id'] as int?
  ..uuid = json['uuid'] as String?
  ..hidden = json['hidden'] as int?
  ..ordering = json['ordering'] as int?
  ..createdById = json['created_by_id'] as int?
  ..username = json['username'] as String?
  ..password = json['password'] as String?
  ..kioskId = json['kiosk_id'] as int?
  ..kiosk = json['kiosk'] == null
      ? null
      : Kiosk.fromJson(json['kiosk'] as Map<String, dynamic>)
  ..employeeId = json['employee_id'] as int?
  ..employeeIdStr = json['employee_id_str'] as int?;

Map<String, dynamic> _$UserToJson(User instance) => <String, dynamic>{
      'id': instance.id,
      'uuid': instance.uuid,
      'hidden': instance.hidden,
      'ordering': instance.ordering,
      'created_by_id': instance.createdById,
      'username': instance.username,
      'password': instance.password,
      'kiosk_id': instance.kioskId,
      'kiosk': instance.kiosk,
      'employee_id': instance.employeeId,
      'employee_id_str': instance.employeeIdStr,
    };

Item _$ItemFromJson(Map<String, dynamic> json) => Item()
  ..id = json['id'] as int?
  ..uuid = json['uuid'] as String?
  ..hidden = json['hidden'] as int?
  ..ordering = json['ordering'] as int?
  ..createdById = json['created_by_id'] as int?
  ..name = json['name'] as String?
  ..description = json['description'] as String?
  ..itemGroupId = json['item_group_id'] as int?
  ..itemGroup = json['itemGroup'] == null
      ? null
      : ItemGroup.fromJson(json['itemGroup'] as Map<String, dynamic>)
  ..unitOfMeasurementId = json['unit_of_measurement_id'] as int?
  ..unitOfMeasurement = json['unitOfMeasurement'] == null
      ? null
      : UnitOfMeasurement.fromJson(
          json['unitOfMeasurement'] as Map<String, dynamic>)
  ..itemPrices = (json['itemPrices'] as List<dynamic>?)
      ?.map((e) =>
          e == null ? null : ItemPrice.fromJson(e as Map<String, dynamic>))
      .toList();

Map<String, dynamic> _$ItemToJson(Item instance) => <String, dynamic>{
      'id': instance.id,
      'uuid': instance.uuid,
      'hidden': instance.hidden,
      'ordering': instance.ordering,
      'created_by_id': instance.createdById,
      'name': instance.name,
      'description': instance.description,
      'item_group_id': instance.itemGroupId,
      'itemGroup': instance.itemGroup,
      'unit_of_measurement_id': instance.unitOfMeasurementId,
      'unitOfMeasurement': instance.unitOfMeasurement,
      'itemPrices': instance.itemPrices,
    };

ItemGroup _$ItemGroupFromJson(Map<String, dynamic> json) => ItemGroup()
  ..id = json['id'] as int?
  ..uuid = json['uuid'] as String?
  ..hidden = json['hidden'] as int?
  ..ordering = json['ordering'] as int?
  ..createdById = json['created_by_id'] as int?
  ..name = json['name'] as String?;

Map<String, dynamic> _$ItemGroupToJson(ItemGroup instance) => <String, dynamic>{
      'id': instance.id,
      'uuid': instance.uuid,
      'hidden': instance.hidden,
      'ordering': instance.ordering,
      'created_by_id': instance.createdById,
      'name': instance.name,
    };

UnitOfMeasurement _$UnitOfMeasurementFromJson(Map<String, dynamic> json) =>
    UnitOfMeasurement()
      ..id = json['id'] as int?
      ..uuid = json['uuid'] as String?
      ..hidden = json['hidden'] as int?
      ..ordering = json['ordering'] as int?
      ..createdById = json['created_by_id'] as int?
      ..name = json['name'] as String?;

Map<String, dynamic> _$UnitOfMeasurementToJson(UnitOfMeasurement instance) =>
    <String, dynamic>{
      'id': instance.id,
      'uuid': instance.uuid,
      'hidden': instance.hidden,
      'ordering': instance.ordering,
      'created_by_id': instance.createdById,
      'name': instance.name,
    };

ItemPrice _$ItemPriceFromJson(Map<String, dynamic> json) => ItemPrice()
  ..id = json['id'] as int?
  ..uuid = json['uuid'] as String?
  ..hidden = json['hidden'] as int?
  ..ordering = json['ordering'] as int?
  ..createdById = json['created_by_id'] as int?
  ..itemId = json['item_id'] as int?
  ..price = (json['price'] as num?)?.toDouble()
  ..date = json['date'] as String?;

Map<String, dynamic> _$ItemPriceToJson(ItemPrice instance) => <String, dynamic>{
      'id': instance.id,
      'uuid': instance.uuid,
      'hidden': instance.hidden,
      'ordering': instance.ordering,
      'created_by_id': instance.createdById,
      'item_id': instance.itemId,
      'price': instance.price,
      'date': instance.date,
    };

ItemsTransaction _$ItemsTransactionFromJson(Map<String, dynamic> json) =>
    ItemsTransaction()
      ..id = json['id'] as int?
      ..uuid = json['uuid'] as String?
      ..hidden = json['hidden'] as int?
      ..ordering = json['ordering'] as int?
      ..createdById = json['created_by_id'] as int?
      ..itemId = json['item_id'] as int?
      ..item = json['item'] == null
          ? null
          : Item.fromJson(json['item'] as Map<String, dynamic>)
      ..transactionId = json['transaction_id'] as int?
      ..transaction = json['transaction'] == null
          ? null
          : Transaction.fromJson(json['transaction'] as Map<String, dynamic>)
      ..qty = (json['qty'] as num?)?.toDouble()
      ..isCustomPrice = json['is_custom_price'] as int?
      ..customPrice = (json['custom_price'] as num?)?.toDouble();

Map<String, dynamic> _$ItemsTransactionToJson(ItemsTransaction instance) =>
    <String, dynamic>{
      'id': instance.id,
      'uuid': instance.uuid,
      'hidden': instance.hidden,
      'ordering': instance.ordering,
      'created_by_id': instance.createdById,
      'item_id': instance.itemId,
      'item': instance.item,
      'transaction_id': instance.transactionId,
      'transaction': instance.transaction,
      'qty': instance.qty,
      'is_custom_price': instance.isCustomPrice,
      'custom_price': instance.customPrice,
    };

Kiosk _$KioskFromJson(Map<String, dynamic> json) => Kiosk()
  ..id = json['id'] as int?
  ..uuid = json['uuid'] as String?
  ..hidden = json['hidden'] as int?
  ..ordering = json['ordering'] as int?
  ..createdById = json['created_by_id'] as int?
  ..name = json['name'] as String?
  ..lat = (json['lat'] as num?)?.toDouble()
  ..lng = (json['lng'] as num?)?.toDouble();

Map<String, dynamic> _$KioskToJson(Kiosk instance) => <String, dynamic>{
      'id': instance.id,
      'uuid': instance.uuid,
      'hidden': instance.hidden,
      'ordering': instance.ordering,
      'created_by_id': instance.createdById,
      'name': instance.name,
      'lat': instance.lat,
      'lng': instance.lng,
    };

StockInOut _$StockInOutFromJson(Map<String, dynamic> json) => StockInOut()
  ..id = json['id'] as int?
  ..uuid = json['uuid'] as String?
  ..hidden = json['hidden'] as int?
  ..ordering = json['ordering'] as int?
  ..createdById = json['created_by_id'] as int?
  ..name = json['name'] as String?
  ..date = json['date'] as String?;

Map<String, dynamic> _$StockInOutToJson(StockInOut instance) =>
    <String, dynamic>{
      'id': instance.id,
      'uuid': instance.uuid,
      'hidden': instance.hidden,
      'ordering': instance.ordering,
      'created_by_id': instance.createdById,
      'name': instance.name,
      'date': instance.date,
    };

StockInOutsItem _$StockInOutsItemFromJson(Map<String, dynamic> json) =>
    StockInOutsItem()
      ..id = json['id'] as int?
      ..uuid = json['uuid'] as String?
      ..hidden = json['hidden'] as int?
      ..ordering = json['ordering'] as int?
      ..createdById = json['created_by_id'] as int?
      ..qty = (json['qty'] as num?)?.toDouble()
      ..itemId = json['item_id'] as int?
      ..item = json['item'] == null
          ? null
          : Item.fromJson(json['item'] as Map<String, dynamic>)
      ..inOutType = json['in_out_type'] as String?
      ..stockInOutId = json['stock_in_out_id'] as int?
      ..stockInOut = json['stock_in_out'] == null
          ? null
          : StockInOut.fromJson(json['stock_in_out'] as Map<String, dynamic>);

Map<String, dynamic> _$StockInOutsItemToJson(StockInOutsItem instance) =>
    <String, dynamic>{
      'id': instance.id,
      'uuid': instance.uuid,
      'hidden': instance.hidden,
      'ordering': instance.ordering,
      'created_by_id': instance.createdById,
      'qty': instance.qty,
      'item_id': instance.itemId,
      'item': instance.item,
      'in_out_type': instance.inOutType,
      'stock_in_out_id': instance.stockInOutId,
      'stock_in_out': instance.stockInOut,
    };

Transaction _$TransactionFromJson(Map<String, dynamic> json) => Transaction()
  ..id = json['id'] as int?
  ..uuid = json['uuid'] as String?
  ..hidden = json['hidden'] as int?
  ..ordering = json['ordering'] as int?
  ..createdById = json['created_by_id'] as int?
  ..date = json['date'] as String?
  ..remark = json['remark'] as String?
  ..isCustomPrice = json['is_custom_price'] as int?
  ..customPrice = (json['custom_price'] as num?)?.toDouble();

Map<String, dynamic> _$TransactionToJson(Transaction instance) =>
    <String, dynamic>{
      'id': instance.id,
      'uuid': instance.uuid,
      'hidden': instance.hidden,
      'ordering': instance.ordering,
      'created_by_id': instance.createdById,
      'date': instance.date,
      'remark': instance.remark,
      'is_custom_price': instance.isCustomPrice,
      'custom_price': instance.customPrice,
    };
