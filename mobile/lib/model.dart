import 'package:json_annotation/json_annotation.dart';

part 'model.g.dart';

abstract class BaseModel {
  int? id;
  String? uuid;
  int? hidden;
  int? ordering;
  @JsonKey(name: 'created_by_id')
  int? createdById;
}

@JsonSerializable()
class User with BaseModel {
  User();

  String? username;
  String? password;
  @JsonKey(name: 'kiosk_id')
  int? kioskId;
  Kiosk? kiosk;
  @JsonKey(name: 'employee_id')
  int? employeeId;
  @JsonKey(name: 'employee_id_str')
  int? employeeIdStr;

  factory User.fromJson(Map<String, dynamic> json) => _$UserFromJson(json);
  Map<String, dynamic> toJson() => _$UserToJson(this);
}

@JsonSerializable()
class Item with BaseModel {
  Item() {
    itemPrices = [];
  }

  String? name;
  String? description;
  @JsonKey(name: 'item_group_id')
  int? itemGroupId;
  ItemGroup? itemGroup;
  @JsonKey(name: 'unit_of_measurement_id')
  int? unitOfMeasurementId;
  UnitOfMeasurement? unitOfMeasurement;

  List<ItemPrice?>? itemPrices;

  factory Item.fromJson(Map<String, dynamic> json) => _$ItemFromJson(json);
  Map<String, dynamic> toJson() => _$ItemToJson(this);
}

@JsonSerializable()
class ItemGroup with BaseModel {
  ItemGroup();

  String? name;

  factory ItemGroup.fromJson(Map<String, dynamic> json) =>
      _$ItemGroupFromJson(json);
  Map<String, dynamic> toJson() => _$ItemGroupToJson(this);
}

@JsonSerializable()
class UnitOfMeasurement with BaseModel {
  UnitOfMeasurement();

  String? name;

  factory UnitOfMeasurement.fromJson(Map<String, dynamic> json) =>
      _$UnitOfMeasurementFromJson(json);
  Map<String, dynamic> toJson() => _$UnitOfMeasurementToJson(this);
}

@JsonSerializable()
class ItemPrice with BaseModel {
  ItemPrice();

  @JsonKey(name: 'item_id')
  int? itemId;
  double? price;
  String? date;

  factory ItemPrice.fromJson(Map<String, dynamic> json) =>
      _$ItemPriceFromJson(json);
  Map<String, dynamic> toJson() => _$ItemPriceToJson(this);
}

@JsonSerializable()
class ItemsTransaction with BaseModel {
  ItemsTransaction();

  @JsonKey(name: 'item_id')
  int? itemId;
  Item? item;
  @JsonKey(name: 'transaction_id')
  int? transactionId;
  Transaction? transaction;
  double? qty;
  @JsonKey(name: 'is_custom_price')
  int? isCustomPrice;
  @JsonKey(name: 'custom_price')
  double? customPrice;

  factory ItemsTransaction.fromJson(Map<String, dynamic> json) =>
      _$ItemsTransactionFromJson(json);
  Map<String, dynamic> toJson() => _$ItemsTransactionToJson(this);
}

@JsonSerializable()
class Kiosk with BaseModel {
  Kiosk();

  String? name;
  double? lat;
  double? lng;

  factory Kiosk.fromJson(Map<String, dynamic> json) => _$KioskFromJson(json);
  Map<String, dynamic> toJson() => _$KioskToJson(this);
}

@JsonSerializable()
class StockInOut with BaseModel {
  StockInOut();

  String? name;
  String? date;

  factory StockInOut.fromJson(Map<String, dynamic> json) =>
      _$StockInOutFromJson(json);
  Map<String, dynamic> toJson() => _$StockInOutToJson(this);
}

@JsonSerializable()
class StockInOutsItem with BaseModel {
  StockInOutsItem();

  double? qty;
  @JsonKey(name: 'item_id')
  int? itemId;
  Item? item;
  @JsonKey(name: 'in_out_type')
  String? inOutType;
  @JsonKey(name: 'stock_in_out_id')
  int? stockInOutId;
  @JsonKey(name: 'stock_in_out')
  StockInOut? stockInOut;

  factory StockInOutsItem.fromJson(Map<String, dynamic> json) =>
      _$StockInOutsItemFromJson(json);
  Map<String, dynamic> toJson() => _$StockInOutsItemToJson(this);
}

@JsonSerializable()
class Transaction with BaseModel {
  Transaction();

  String? date;
  String? remark;
  @JsonKey(name: 'is_custom_price')
  int? isCustomPrice;
  @JsonKey(name: 'custom_price')
  double? customPrice;

  factory Transaction.fromJson(Map<String, dynamic> json) =>
      _$TransactionFromJson(json);
  Map<String, dynamic> toJson() => _$TransactionToJson(this);
}
