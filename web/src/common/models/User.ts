import {BaseModel} from './Base';


export interface User extends BaseModel {
    username: string;
    email?: string;
    phone?: string;
    password?: string;
}