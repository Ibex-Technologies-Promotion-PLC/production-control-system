# Production Control System - User Manual

## Table of Contents
1. [System Overview](#system-overview)
2. [Getting Started](#getting-started)
3. [Core Modules](#core-modules)
4. [User Management](#user-management)
5. [Inventory Management](#inventory-management)
6. [Production Management](#production-management)
7. [Dispatch Management](#dispatch-management)
8. [Reporting & Analytics](#reporting--analytics)
9. [System Administration](#system-administration)
10. [Troubleshooting](#troubleshooting)

## System Overview

The Production Control System is a comprehensive Laravel-based application designed to manage manufacturing operations, inventory control, and order dispatch. The system provides real-time monitoring of production processes, stock levels, and order fulfillment.

### Key Features
- **Real-time Dashboard** with critical stock alerts
- **Inventory Management** with lot tracking
- **Production Planning** with work order management
- **Order Dispatch** with route optimization
- **Multi-language Support** (English/Turkish)
- **Role-based Access Control**
- **Comprehensive Reporting**

### System Architecture
- **Backend**: Laravel 11 with Livewire 3
- **Database**: MySQL with comprehensive relationships
- **Frontend**: Blade templates with Tailwind CSS
- **Authentication**: Laravel Jetstream with Fortify

## Getting Started

### 1. Accessing the System
- Navigate to your application URL
- Login with your credentials
- You'll be redirected to the main dashboard

### 2. Dashboard Overview
The dashboard provides a comprehensive overview of your operations:

#### Critical Stock Alerts
- **Red Warning Section**: Products below minimum threshold
- Shows product code, name, current stock, and required amount
- Click to expand for detailed information

#### Overview Cards
- **Production Summary**: Total work orders completed
- **Dispatch Summary**: Total shipments made
- **Stock Summary**: Total stock entries made

#### Live Reports
- **Work Orders**: Real-time production status
- **Dispatch Orders**: Real-time shipping status

## Core Modules

### 1. Products Management

#### Product Information
- **Product Code**: Unique identifier for each product
- **Barcode**: For scanning and identification
- **Name**: Product description
- **Category**: Product classification
- **Cost & Sales Price**: Financial information
- **Shelf Life**: Expiration tracking
- **Minimum Threshold**: Stock level alerts

#### Product Types
- **Producible**: Can be manufactured in-house
- **Active/Inactive**: Product availability status

#### Units Management
- **Base Units**: Primary measurement units
- **Conversion Factors**: Unit conversion calculations
- **Product-specific Units**: Custom units per product

### 2. Categories Management
- **Category Names**: Product classification
- **Hierarchical Structure**: Organized product grouping
- **Search & Filter**: Quick category access

### 3. Companies Management

#### Company Types
- **Suppliers**: Companies that provide materials
- **Customers**: Companies that receive products
- **Both**: Companies that are both suppliers and customers

#### Company Information
- **Commercial Title**: Official company name
- **Phone Numbers**: Contact information
- **Addresses**: Multiple address support
- **Notes**: Additional information

#### Address Management
- **Country/Province/District**: Geographic location
- **Address Body**: Street address details
- **Phone**: Contact numbers
- **Notes**: Special instructions

## Inventory Management

### 1. Stock Moves
Track all inventory movements:

#### Move Types
- **IN**: Stock received (purchases, production)
- **OUT**: Stock consumed (sales, production)
- **TRANSFER**: Internal stock movements

#### Stock Information
- **Lot Numbers**: Batch tracking
- **Amounts**: Quantity with units
- **Direction**: In/Out movement
- **Approval Status**: Movement authorization
- **Date/Time**: Movement timestamp

### 2. Inventory Monitoring
- **Current Stock Levels**: Real-time stock quantities
- **Threshold Alerts**: Low stock warnings
- **Lot Tracking**: Batch expiration monitoring
- **Stock History**: Movement audit trail

### 3. Reserved Stocks
- **Reservation System**: Stock allocation for orders
- **Lot Reservation**: Specific batch allocation
- **Archive Management**: Historical reservation tracking

## Production Management

### 1. Work Orders

#### Order Creation
- **Product Selection**: Choose product to manufacture
- **Quantity**: Production amount
- **Unit**: Measurement unit
- **Lot Number**: Production batch identifier
- **Priority Queue**: Production scheduling
- **Notes**: Special instructions

#### Order Status
- **Pending**: Awaiting production start
- **In Progress**: Currently being manufactured
- **Completed**: Production finished
- **Cancelled**: Order terminated

#### Production Tracking
- **Start Time**: Production initiation
- **Completion Time**: Production finish
- **Actual vs. Planned**: Schedule comparison

### 2. Recipes Management
- **Ingredient Lists**: Required materials
- **Quantities**: Material amounts needed
- **Units**: Measurement specifications
- **Product Association**: Recipe-to-product linking

## Dispatch Management

### 1. Dispatch Orders

#### Order Information
- **Order Number**: Unique dispatch identifier
- **Status**: Current order state
- **Planned Date/Time**: Scheduled dispatch
- **Actual Date/Time**: Actual dispatch time
- **Company**: Customer/supplier
- **Address**: Delivery location
- **Sales Type**: Order classification

#### Order Status
- **Pending**: Awaiting preparation
- **Preparing**: Being readied for dispatch
- **Dispatched**: Out for delivery
- **Delivered**: Successfully completed

### 2. Dispatch Products
- **Product Selection**: Items to dispatch
- **Quantities**: Amounts with units
- **Readiness Status**: Product availability
- **Order Association**: Link to dispatch order

### 3. Dispatch Extras
- **Vehicle Information**: License plate numbers
- **Driver Details**: Name and contact
- **Expenses**: Transportation and handling costs

## User Management

### 1. Authentication
- **Login/Logout**: Secure access control
- **Password Management**: Reset and change
- **Two-Factor Authentication**: Enhanced security

### 2. Role-Based Access Control
- **Permissions**: Granular access rights
- **Roles**: Permission groupings
- **User Assignment**: Role allocation

### 3. User Profiles
- **Personal Information**: Name, email, photo
- **Team Management**: Multi-team support
- **Session Management**: Browser session control

## Reporting & Analytics

### 1. Dashboard Reports
- **Production Metrics**: Work order statistics
- **Dispatch Metrics**: Shipping statistics
- **Stock Metrics**: Inventory statistics

### 2. Live Reports
- **Real-time Updates**: Current status information
- **Production Status**: Work order progress
- **Dispatch Status**: Order fulfillment progress

### 3. Export Capabilities
- **Data Export**: Excel/CSV file generation
- **Report Generation**: Formatted reports
- **Custom Filters**: Specific data selection

## System Administration

### 1. Configuration
- **Environment Settings**: Application configuration
- **Database Management**: Data maintenance
- **Cache Management**: Performance optimization

### 2. Maintenance
- **Log Management**: System activity tracking
- **Backup Procedures**: Data protection
- **Update Management**: System upgrades

### 3. Monitoring
- **Performance Metrics**: System health indicators
- **Error Tracking**: Issue identification
- **User Activity**: Usage analytics

## Troubleshooting

### 1. Common Issues

#### Login Problems
- **Password Reset**: Use forgot password function
- **Account Lockout**: Contact administrator
- **Session Expiry**: Re-login required

#### Stock Discrepancies
- **Check Stock Moves**: Verify all transactions
- **Review Reservations**: Check allocated stock
- **Audit Trail**: Review movement history

#### Production Delays
- **Work Order Status**: Check current progress
- **Resource Availability**: Verify materials
- **Queue Priority**: Review scheduling

### 2. Support Contacts
- **System Administrator**: For technical issues
- **Department Manager**: For process questions
- **IT Support**: For access and permission issues

### 3. Best Practices
- **Regular Backups**: Data protection
- **User Training**: Proper system usage
- **Process Documentation**: Standard operating procedures

## Keyboard Shortcuts

### Navigation
- **Dashboard**: `Ctrl/Cmd + D`
- **Products**: `Ctrl/Cmd + P`
- **Inventory**: `Ctrl/Cmd + I`
- **Work Orders**: `Ctrl/Cmd + W`
- **Dispatch**: `Ctrl/Cmd + S`

### Actions
- **Save**: `Ctrl/Cmd + S`
- **Cancel**: `Esc`
- **Search**: `Ctrl/Cmd + F`
- **Refresh**: `F5`

## Data Import/Export

### 1. Import Functions
- **Product Data**: Bulk product creation
- **Company Information**: Mass company import
- **Stock Levels**: Initial inventory setup

### 2. Export Functions
- **Reports**: PDF/Excel generation
- **Data Backup**: Complete data export
- **Custom Queries**: Specific data extraction

## Security Features

### 1. Access Control
- **Authentication**: Secure login system
- **Authorization**: Permission-based access
- **Session Management**: Secure session handling

### 2. Data Protection
- **Encryption**: Sensitive data protection
- **Audit Logging**: Activity tracking
- **Backup Security**: Protected data storage

## Performance Optimization

### 1. System Tuning
- **Database Optimization**: Query performance
- **Cache Management**: Response time improvement
- **Resource Allocation**: Memory and CPU usage

### 2. User Experience
- **Loading Times**: Page response optimization
- **Search Performance**: Quick data retrieval
- **Real-time Updates**: Live data synchronization

---

**Note**: This manual covers the core functionality of the Production Control System. For specific features or advanced usage, please refer to the system help documentation or contact your system administrator.

**Version**: 1.0  
**Last Updated**: Current Date  
**System**: Production Control System v11
