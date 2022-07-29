export default [{
        component: 'CNavItem',
        name: 'Dashboard',
        to: '/dashboard',
        icon: 'cil-speedometer',
        badge: {
            color: 'info',
            text: 'NEW',
        },
    },
    {
        component: 'CNavTitle',
        name: 'Website Management',
    },
    {
        component: 'CNavItem',
        name: 'Professions',
        to: '/admin/professions',
        icon: 'cil-drop',
    },
    {
        component: 'CNavItem',
        name: 'Persons',
        to: '/admin/persons',
        icon: 'cil-pencil',
    },
]