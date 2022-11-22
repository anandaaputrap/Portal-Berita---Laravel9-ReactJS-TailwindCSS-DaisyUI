import React from 'react';
import { Link, Head } from '@inertiajs/inertia-react';
import Navbar from '@/Components/Homepage/Navbar';

import NewsList from '@/Components/Homepage/NewsList';
import Paginator from '@/Components/Homepage/Paginator';


export default function Homepage(props) {
    // console.logs(props)
    return( 
        <div className='min-h-screen bg-base-200'>
            <Head title={props.title} />
            <Navbar user ={props.auth.user} />
            <div className="flex justify-center flex-col lg:flex-row lg:flex-wrap lg:flex-strecth items-center gap-4 p-4">
                <NewsList news={props.news.data}/>
            </div> 
            <div className="flex justify-center items-center">
                <Paginator meta={props.news.meta}/>
            </div>    
        </div>
    )
}